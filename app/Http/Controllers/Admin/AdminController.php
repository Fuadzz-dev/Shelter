<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Helpdesk;
use App\Models\TindakanPerbaikan;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the form to create a new report on behalf of a pegawai.
     */
    public function createLaporan(): View
    {
        $users = User::where('role', 'user')
            ->where('status', 'active')
            ->orderBy('nama_lengkap')
            ->get();

        return view('admin.membuat_laporan_admin', compact('users'));
    }

    /**
     * Store a new helpdesk report on behalf of a pegawai.
     */
    public function storeLaporan(Request $request): RedirectResponse
    {
        $request->validate([
            'id_pelapor' => 'required|exists:user,user_id',
            'judul_masalah' => 'required|string|max:255',
            'deskripsi_keluhan' => 'required|string',
            'foto_helpdesk' => 'nullable|array',
            'foto_helpdesk.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi,webm,mkv|max:51200',
        ], [
            'id_pelapor.required' => 'Silakan pilih pegawai atas nama laporan dibuat.',
            'id_pelapor.exists' => 'Pegawai yang dipilih tidak terdaftar.',
        ]);

        // Handle photo uploads
        $photoPaths = [];
        if ($request->hasFile('foto_helpdesk')) {
            foreach ($request->file('foto_helpdesk') as $photo) {
                if ($photo->isValid()) {
                    $filename = time().'_'.uniqid().'.'.$photo->extension();
                    $photo->move(public_path('simpan_foto'), $filename);
                    $photoPaths[] = 'simpan_foto/'.$filename;
                }
            }
        }

        DB::transaction(function () use ($request, $photoPaths) {
            Helpdesk::create([
                'nomor_Helpdesk' => Helpdesk::generateNomorHelpdesk(),
                'id_pelapor' => $request->input('id_pelapor'),
                'judul_masalah' => $request->judul_masalah,
                'deskripsi_keluhan' => $request->deskripsi_keluhan,
                'foto_helpdesk' => ! empty($photoPaths) ? $photoPaths : null,
                'status_Helpdesk' => 'In Progress',
                'tanggal_lapor' => now(),
            ]);
        });

        return redirect()->route('admin.helpdesk')
            ->with('success', 'Laporan berhasil dibuat.');
    }

    /**
     * Show the admin helpdesk management page.
     */
    public function helpdesk(Request $request): View
    {
        $query = Helpdesk::with('pelapor')
            ->whereIn('status_Helpdesk', ['In Progress', 'in repair', 'Waiting Approval']);

        if ($request->filled('status')) {
            $query->where('status_Helpdesk', $request->input('status'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nomor_Helpdesk', 'like', "%{$search}%")
                    ->orWhere('judul_masalah', 'like', "%{$search}%");
            });
        }

        $helpdesks = $query->orderByDesc('tanggal_lapor')->paginate(10)->withQueryString();

        return view('admin.helpdesk', compact('helpdesks'));
    }

    /**
     * Show the helpdesk detail page for admin.
     */
    public function helpdeskDetail(int $id): View
    {
        $helpdesk = Helpdesk::with([
            'pelapor',
            'riwayat',
            'tindakanPerbaikan' => function ($q) {
                $q->orderByDesc('waktu_tindakan');
            },
            'persetujuanDigital',
        ])->findOrFail($id);

        return view('admin.detai_helpdesk', compact('helpdesk'));
    }

    /**
     * Show the user management page.
     */
    public function manajemenPengguna(): View
    {
        $pengguna = User::where('user_id', '!=', auth()->id())
            ->orderByDesc('created_at')
            ->get();

        return view('admin.manajemen_pengguna', compact('pengguna'));
    }

    /**
     * Show the helpdesk history page (status Completed).
     * Data diambil dari tabel helpdesk, tindakan_perbaikan, dan persetujuan_digital.
     */
public function riwayatHelpdesk(Request $request): View
    {
        $query = Helpdesk::with([
            'pelapor',
            'tindakanPerbaikan' => function ($q) {
                $q->orderByDesc('waktu_tindakan');
            },
            'persetujuanDigital' => function ($q) {
                $q->orderByDesc('waktu_persetujuan');
            },
            'persetujuanDigital.penyetuju',
            'riwayat' => function ($q) {
                $q->orderByDesc('waktu_diselesaikan');
            },
            'riwayat.pelapor',
        ])->where('status_Helpdesk', 'Completed');

        // Filter rentang tanggal (tanggal lapor / tanggal selesai)
        if ($request->filled('tanggal_awal') || $request->filled('tanggal_akhir')) {
            $tanggalAwal = $request->input('tanggal_awal');
            $tanggalAkhir = $request->input('tanggal_akhir');

            $query->where(function ($q) use ($tanggalAwal, $tanggalAkhir) {
                // Tanggal laporan dibuat
                $q->where(function ($q2) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $q2->whereDate('tanggal_lapor', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $q2->whereDate('tanggal_lapor', '<=', $tanggalAkhir);
                    }
                });

                // Tanggal persetujuan digital (validasi selesai)
                $q->orWhereHas('persetujuanDigital', function ($sub) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $sub->whereDate('waktu_persetujuan', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $sub->whereDate('waktu_persetujuan', '<=', $tanggalAkhir);
                    }
                });

                // Tanggal riwayat diselesaikan
                $q->orWhereHas('riwayat', function ($sub) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $sub->whereDate('waktu_diselesaikan', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $sub->whereDate('waktu_diselesaikan', '<=', $tanggalAkhir);
                    }
                });
            });
        }

        // Filter gabungan nama / NIP pelapor
        if ($request->filled('cari')) {
            $cari = $request->input('cari');
            $query->whereHas('pelapor', function ($q) use ($cari) {
                $q->where('nama_lengkap', 'like', "%{$cari}%")
                    ->orWhere('nip', 'like', "%{$cari}%");
            });
        }

        $riwayatHelpdesks = $query->orderByDesc('tanggal_lapor')->paginate(10)->withQueryString();

        return view('admin.riwayat_helpdesk', compact('riwayatHelpdesks'));
    }

/**
     * Update status validasi (Valid/Invalid) pada persetujuan digital.
     * Dipanggil via AJAX dari halaman riwayat helpdesk.
     */
    public function updateStatusValidasi(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'status' => ['required', 'string', 'in:Valid,Invalid'],
        ]);

        $helpdesk = Helpdesk::findOrFail($id);

        $persetujuan = $helpdesk->persetujuanDigital()
            ->orderByDesc('id_persetujuan')
            ->first();

        if (! $persetujuan) {
            return response()->json([
                'message' => 'Belum ada data persetujuan digital untuk laporan ini.',
            ], 422);
        }

        $persetujuan->update([
            'status_dokumen' => $request->input('status'),
        ]);

        return response()->json([
            'message' => 'Status validasi berhasil diperbarui.',
            'status' => $persetujuan->status_dokumen,
        ]);
    }

    /**
     * Show the detail page of a completed helpdesk (riwayat).
     */
    public function detailRiwayat(int $id): View
    {
        $helpdesk = Helpdesk::with([
            'pelapor',
            'riwayat',
            'tindakanPerbaikan' => function ($q) {
                $q->orderByDesc('waktu_tindakan');
            },
            'persetujuanDigital',
        ])->findOrFail($id);

        return view('admin.detail_riwayat', compact('helpdesk'));
    }

    /**
     * Export riwayat helpdesk ke file CSV (mengikuti filter aktif).
     */
    public function exportRiwayatHelpdesk(Request $request)
    {
        $query = Helpdesk::with([
            'pelapor',
            'tindakanPerbaikan' => function ($q) {
                $q->orderByDesc('waktu_tindakan');
            },
            'persetujuanDigital' => function ($q) {
                $q->orderByDesc('waktu_persetujuan');
            },
            'riwayat' => function ($q) {
                $q->orderByDesc('waktu_diselesaikan');
            },
        ])->where('status_Helpdesk', 'Completed');

        if ($request->filled('tanggal_awal') || $request->filled('tanggal_akhir')) {
            $tanggalAwal = $request->input('tanggal_awal');
            $tanggalAkhir = $request->input('tanggal_akhir');

            $query->where(function ($q) use ($tanggalAwal, $tanggalAkhir) {
                // Tanggal laporan dibuat
                $q->where(function ($q2) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $q2->whereDate('tanggal_lapor', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $q2->whereDate('tanggal_lapor', '<=', $tanggalAkhir);
                    }
                });

                // Tanggal persetujuan digital (validasi selesai)
                $q->orWhereHas('persetujuanDigital', function ($sub) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $sub->whereDate('waktu_persetujuan', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $sub->whereDate('waktu_persetujuan', '<=', $tanggalAkhir);
                    }
                });

                // Tanggal riwayat diselesaikan
                $q->orWhereHas('riwayat', function ($sub) use ($tanggalAwal, $tanggalAkhir) {
                    if ($tanggalAwal) {
                        $sub->whereDate('waktu_diselesaikan', '>=', $tanggalAwal);
                    }
                    if ($tanggalAkhir) {
                        $sub->whereDate('waktu_diselesaikan', '<=', $tanggalAkhir);
                    }
                });
            });
        }

        if ($request->filled('cari')) {
            $cari = $request->input('cari');
            $query->whereHas('pelapor', function ($q) use ($cari) {
                $q->where('nama_lengkap', 'like', "%{$cari}%")
                    ->orWhere('nip', 'like', "%{$cari}%");
            });
        }

        $items = $query->orderByDesc('tanggal_lapor')->get();

        $filename = 'riwayat-helpdesk-'.now()->format('Y-m-d_His').'.csv';

        return response()->streamDownload(function () use ($items) {
            $handle = fopen('php://output', 'w');

            // BOM agar terbaca UTF-8 di Excel
            fputs($handle, "\xEF\xBB\xBF");

            fputcsv($handle, [
                'Nama Pelapor',
                'NIP',
                'Nomor Tiket',
                'Judul Masalah',
                'Deskripsi Tindakan',
                'Tanggal Selesai',
                'Status Validasi',
            ]);

            foreach ($items as $item) {
                $persetujuan = $item->persetujuanDigital->first();
                $tindakan = $item->tindakanPerbaikan->first();
                $waktuSelesai = $persetujuan?->waktu_persetujuan
                    ?? $item->riwayat->first()?->waktu_diselesaikan;

                fputcsv($handle, [
                    $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui',
                    $item->pelapor?->nip ?? '-',
                    $item->nomor_Helpdesk,
                    $item->judul_masalah,
                    $tindakan?->deskripsi_tindakan ?? '-',
                    $waktuSelesai
                        ? \Carbon\Carbon::parse($waktuSelesai)->translatedFormat('d M Y H:i')
                        : '-',
                    $persetujuan?->status_dokumen ?? 'Belum Validasi',
                ]);
            }

            fclose($handle);
        }, $filename, ['Content-Type' => 'text/csv; charset=UTF-8']);
    }

    /**
     * Store a new user via AJAX.
     */
    public function storePengguna(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'nip' => ['required', 'string', 'max:50', 'unique:user,nip'],
            'fullName' => ['required', 'string', 'max:150'],
            'email' => ['nullable', 'string', 'email', 'max:100', 'unique:user,email'],
            'department' => ['required', 'string', 'max:150'],
            'role' => ['required', 'string', 'in:admin,user'],
        ], [
            'nip.unique' => 'NIP sudah terdaftar di sistem.',
            'nip.required' => 'NIP wajib diisi.',
            'fullName.required' => 'Nama lengkap wajib diisi.',
            'department.required' => 'Departemen wajib dipilih.',
            'role.required' => 'Role wajib dipilih.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'nip' => $request->input('nip'),
            'nama_lengkap' => $request->input('fullName'),
            'email' => $request->input('email'),
            'jabatan_departemen' => $request->input('department'),
            'role' => $request->input('role'),
            'password' => Hash::make('otbanwil5'),
            'status' => 'active',
        ]);

        return response()->json([
            'message' => 'Pengguna berhasil ditambahkan.',
            'user' => $user,
        ], 201);
    }

    /**
     * Update an existing user via AJAX.
     */
    public function updatePengguna(Request $request, $id): JsonResponse
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'fullName' => ['required', 'string', 'max:150'],
            'department' => ['required', 'string', 'max:150'],
            'role' => ['required', 'string', 'in:admin,user'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->update([
            'nama_lengkap' => $request->input('fullName'),
            'jabatan_departemen' => $request->input('department'),
            'role' => $request->input('role'),
        ]);

        return response()->json([
            'message' => 'Pengguna berhasil diperbarui.',
            'user' => $user,
        ]);
    }

    /**
     * Toggle user status (active/inactive) via AJAX.
     */
    public function toggleStatus(Request $request, $id): JsonResponse
    {
        $user = User::findOrFail($id);

        $request->validate([
            'status' => ['required', 'string', 'in:active,inactive'],
        ]);

        $user->update([
            'status' => $request->input('status'),
        ]);

        return response()->json([
            'message' => 'Status pengguna berhasil diperbarui.',
            'user' => $user,
        ]);
    }

    /**
     * Reset user password to the default password via AJAX.
     */
    public function resetPassword(Request $request, $id): JsonResponse
    {
        $user = User::findOrFail($id);

        $user->update([
            'password' => Hash::make('otbanwil5'),
        ]);

        return response()->json([
            'message' => 'Password berhasil direset ke password default.',
        ]);
    }

/**
     * Show the admin profile page.
     */
    public function profil(): View
    {
        $user = auth()->user();

        return view('admin.profil_admin', compact('user'));
    }

    /**
     * Update the admin profile (personal info, photo, and password).
     */
    public function updateProfil(Request $request): RedirectResponse
    {
        $user = auth()->user();

        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:150'],
            'nip' => ['nullable', 'string', 'max:50'],
            'jabatan_departemen' => ['nullable', 'string', 'max:150'],
            'email' => ['nullable', 'email', 'max:100', 'unique:user,email,'.$user->user_id.',user_id'],
            'foto_profil' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'email.unique' => 'Email sudah terdaftar di sistem.',
            'foto_profil.image' => 'File harus berupa gambar.',
            'foto_profil.mimes' => 'Foto profil harus berformat jpg, jpeg, png, atau webp.',
            'foto_profil.max' => 'Ukuran foto profil maksimal 2MB.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        $data = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nip' => $request->input('nip'),
            'jabatan_departemen' => $request->input('jabatan_departemen'),
            'email' => $request->input('email'),
        ];

        // Update foto profil jika user mengunggah file baru
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time().'_'.uniqid().'.'.$file->extension();
            $file->move(public_path('simpan_foto'), $filename);
            $data['foto_profil'] = 'simpan_foto/'.$filename;
        }

        // Update password jika user mengisi password baru
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        $user->update($data);

        return redirect()->route('admin.profil')
            ->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Store a new technical action log (Tindakan Perbaikan) via AJAX.
     * Also updates the helpdesk status based on the admin's selection.
     */
    public function storeLog(Request $request, $id): JsonResponse
    {
        $helpdesk = Helpdesk::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'status' => ['required', 'string', 'in:in_progress,in_repair,waiting_approval'],
            'description' => ['required', 'string', 'min:10'],
            'attachments' => ['nullable', 'array'],
            'attachments.*' => ['nullable', 'file', 'mimes:jpg,jpeg,png,mp4,mov,avi,webm,mkv', 'max:51200'],
        ], [
            'status.required' => 'Status laporan wajib diperbarui.',
            'description.required' => 'Deskripsi tindakan wajib diisi.',
            'description.min' => 'Deskripsi tindakan minimal 10 karakter.',
            'attachments.*.max' => 'Ukuran file maksimal 50MB per file.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Map form status to DB status
        $statusMap = [
            'in_progress' => 'In Progress',
            'in_repair' => 'In Repair',
            'waiting_approval' => 'Waiting Approval',
        ];

        // Gunakan status yang dipilih oleh admin langsung dari form
        $newStatus = $statusMap[$request->input('status')];

        // Handle file upload if any
        $fotoPaths = null;
        if ($request->hasFile('attachments')) {
            $fotoPaths = [];
            foreach ($request->file('attachments') as $file) {
                if ($file->isValid()) {
                    $filename = time().'_'.uniqid().'.'.$file->extension();
                    $file->move(public_path('simpan_foto'), $filename);
                    $fotoPaths[] = 'simpan_foto/'.$filename;
                }
            }
            if (empty($fotoPaths)) {
                $fotoPaths = null;
            }
        }

        // Create tindakan perbaikan
        $tindakan = TindakanPerbaikan::create([
            'id_helpdesk' => $helpdesk->id_helpdesk,
            'deskripsi_tindakan' => $request->input('description'),
            'foto_tindakan' => $fotoPaths,
            'waktu_tindakan' => now(),
        ]);

        // Update helpdesk status
        $helpdesk->update([
            'status_Helpdesk' => $newStatus,
        ]);

        // Create riwayat record
        $helpdesk->riwayat()->create([
            'id_tindakan' => $tindakan->id_tindakan,
            'id_pelapor' => $request->user()->user_id,
            'judul_masalah' => $helpdesk->judul_masalah,
            'waktu_diselesaikan' => now(),
        ]);

        return response()->json([
            'message' => 'Log tindakan berhasil disimpan.',
            'tindakan' => $tindakan,
        ], 201);
    }
}
