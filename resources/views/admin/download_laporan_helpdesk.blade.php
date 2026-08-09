<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title>Laporan Helpdesk Resmi - {{ $helpdesk->nomor_surat }}</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap" rel="stylesheet" />
    <!-- qrcodejs for generating a scannable QR code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            font-size: 11pt;
            color: #000;
            background: #e8eaf0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px 16px;
        }

        @media print {
            body { background: white; padding: 0; }
            .no-print { display: none !important; }
            .document-wrapper { box-shadow: none !important; max-width: 100% !important; padding: 0 !important; }
            .page { padding: 1cm 1.5cm !important; box-shadow: none !important; }
        }

        /* ── Screen Controls ── */
        .no-print {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .btn:hover { opacity: 0.85; }
        .btn-primary   { background: #001e40; color: #fff; }
        .btn-back      { background: #fff; color: #43474f; border: 1.5px solid #c3c6d1; }

        /* ── Document Wrapper ── */
        .document-wrapper { width: 100%; max-width: 800px; }

        .page {
            background: #fff;
            padding: 2cm 2.5cm;
            box-shadow: 0 4px 32px rgba(0,30,64,.15);
            border-radius: 4px;
        }

        /* ══════════════════════════════════
           KOP SURAT
        ══════════════════════════════════ */
        .kop-wrapper {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .kop-logo {
            flex-shrink: 0;
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .kop-text { flex: 1; text-align: center; }

        .kop-kementerian {
            font-size: 13pt;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .kop-direktorat {
            font-size: 16.5pt;
            font-weight: 700;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .kop-kantor {
            font-size: 11.5pt;
            font-weight: 700;
            letter-spacing: 0.03em;
            text-transform: uppercase;
        }

        .kop-line-thick {
            border: none;
            border-top: 4px solid #000;
            margin: 8px 0 2px;
        }

        .kop-line-thin {
            border: none;
            border-top: 1.5px solid #000;
            margin: 0;
        }

        .kop-alamat {
            display: flex;
            justify-content: space-between;
            font-size: 8.5pt;
        }

        .kop-alamat .col-alamat { flex: 1; }
        .kop-alamat .col-telp   { flex: 1; padding: 0 12px; border-left: 1px solid #000; }
        .kop-alamat .col-fax    { flex: 1; padding-left: 12px; border-left: 1px solid #000; }
        .kop-alamat table       { border-collapse: collapse; width: 100%; }
        .kop-alamat td          { padding: 1px 4px 1px 0; vertical-align: top; }
        .kop-alamat td:first-child { white-space: nowrap; }

        /* ══════════════════════════════════
           NOMOR & TANGGAL
        ══════════════════════════════════ */
        .doc-meta {
            display: flex;
            justify-content: space-between;
            margin: 20px 0 12px;
            font-size: 11pt;
        }

        .doc-meta table { border-collapse: collapse; }
        .doc-meta td    { padding: 1.5px 0; vertical-align: top; }
        .doc-meta td:nth-child(2) { padding: 0 6px; }

        /* ══════════════════════════════════
           JUDUL DOKUMEN
        ══════════════════════════════════ */
        .doc-title-section {
            text-align: center;
            margin: 18px 0;
        }

        .doc-title {
            font-size: 13pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            text-decoration: underline;
        }

        .doc-subtitle {
            font-size: 11pt;
            margin-top: 3px;
        }

        /* ══════════════════════════════════
           TEKS PEMBUKA / PENUTUP
        ══════════════════════════════════ */
        .doc-text {
            font-size: 11pt;
            line-height: 1.7;
            margin-bottom: 16px;
            text-align: justify;
        }

        /* ══════════════════════════════════
           TABEL DATA LAPORAN
        ══════════════════════════════════ */
        .section-title {
            font-size: 11pt;
            font-weight: 700;
            margin: 18px 0 8px;
            padding-bottom: 4px;
            border-bottom: 1.5px solid #001e40;
            color: #001e40;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 0 18px;
            font-size: 10.5pt;
        }

        .data-table th {
            background: #001e40;
            color: #fff;
            padding: 8px 10px;
            text-align: left;
            font-weight: 600;
            font-size: 10pt;
        }

        .data-table td {
            padding: 7px 10px;
            border-bottom: 1px solid #e0e3e5;
            vertical-align: top;
            line-height: 1.5;
        }

        .data-table tr:nth-child(even) td { background: #f7f9fb; }
        .data-table tr:last-child td      { border-bottom: none; }
        .data-table .lbl  { width: 38%; font-weight: 600; }
        .data-table .sep  { width: 4%;  color: #737780; }
        .data-table .val  { width: 58%; }

        /* ══════════════════════════════════
           TINDAKAN TEKNIS
        ══════════════════════════════════ */
        .tindakan-item {
            margin-bottom: 10px;
            padding: 10px 12px;
            border-left: 3px solid #001e40;
            background: #f7f9fb;
            font-size: 10.5pt;
            line-height: 1.65;
        }

.tindakan-meta {
            font-size: 9pt;
            color: #43474f;
            margin-bottom: 4px;
        }

        /* ══════════════════════════════════
           LAMPIRAN FOTO
        ══════════════════════════════════ */
        .lampiran-sub {
            font-size: 10.5pt;
            font-weight: 700;
            margin: 14px 0 8px;
            color: #001e40;
        }

        .lampiran-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 16px;
        }

        .lampiran-item {
            border: 1px solid #c3c6d1;
            border-radius: 4px;
            overflow: hidden;
            background: #fff;
            width: 150px;
        }

        .lampiran-item img,
        .lampiran-item video {
            display: block;
            width: 150px;
            height: 112px;
            object-fit: cover;
            background: #f0f4f8;
        }

        .lampiran-caption {
            font-size: 8pt;
            color: #43474f;
            text-align: center;
            padding: 4px 6px;
            border-top: 1px solid #e0e3e5;
            background: #f7f9fb;
        }

        .lampiran-empty {
            font-size: 10pt;
            color: #737780;
            padding: 8px 12px;
            background: #f7f9fb;
            border-left: 3px solid #c3c6d1;
            margin-bottom: 12px;
        }

        /* ══════════════════════════════════
           TANDA TANGAN
        ══════════════════════════════════ */
        .ttd-section {
            display: flex;
            justify-content: space-between;
            margin-top: 28px;
            gap: 16px;
        }

        .ttd-block {
            flex: 1;
            text-align: center;
            font-size: 10.5pt;
        }

        .ttd-role     { font-size: 10pt; margin-bottom: 2px; }
        .ttd-instansi { font-size: 9pt; color: #43474f; margin-bottom: 6px; line-height: 1.4; }

        .ttd-qr-wrap {
            display: flex;
            justify-content: center;
            margin: 0 auto 4px;
        }

        .ttd-qr { width: 72px; height: 72px; }


        .ttd-status-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 2px 10px;
            border-radius: 999px;
            font-size: 8.5pt;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .badge-valid   { background: #dcfce7; color: #166534; }
        .badge-invalid { background: #fee2e2; color: #991b1b; }
        .badge-pending { background: #f3f4f6; color: #374151; }

        .ttd-name {
            font-weight: 700;
            font-size: 10.5pt;
            border-top: 1px solid #000;
            padding-top: 4px;
            display: inline-block;
            min-width: 150px;
            margin-top: 4px;
        }

        .ttd-nip { font-size: 9pt; color: #43474f; margin-top: 2px; }

    </style>
</head>
<body>

    {{-- Screen Controls --}}
    <div class="no-print">
        <a href="{{ url()->previous() }}" class="btn btn-back">
            ← Kembali
        </a>
        <button onclick="window.print()" class="btn btn-primary">
            🖨 Cetak / Simpan PDF
        </button>
    </div>

    <div class="document-wrapper">
        <div class="page">

{{-- KOP SURAT --}}
            <div class="kop-wrapper">
                <img
                    src="{{ asset('images/logo-kemenhub.png') }}"
                    alt="Logo Kementerian Perhubungan"
                    class="kop-logo"
                    onerror="this.style.display='none'"
                />
                <div class="kop-text">
                    <div class="kop-kementerian">KEMENTERIAN PERHUBUNGAN</div>
                    <div class="kop-direktorat">DIREKTORAT JENDERAL PERHUBUNGAN UDARA</div>
                    <div class="kop-kantor">KANTOR OTORITAS BANDAR UDARA WILAYAH V MAKASSAR</div>
                </div>
            </div>

            <div class="kop-alamat">
                <div class="col-alamat">
                    <strong>JL. OTORITAS BANDARA NO. 5</strong><br>
                    MAROS, SULAWESI SELATAN 90552
                </div>
                <div class="col-telp">
                    <table>
                        <tr>
                            <td>TELP</td>
                            <td>: (0411) 3656222</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>: (0411) 3656222</td>
                        </tr>
                    </table>
                </div>
                <div class="col-fax">
                    <table>
                        <tr>
                            <td>FAX</td>
                            <td>: (0411) 3656221</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: otban_wil.v@dephub.go.id</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td>: www.otban5.com</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="kop-line-thick">
            <hr class="kop-line-thin">

            {{-- NOMOR & TANGGAL --}}
            @php
                $persetujuan       = $helpdesk->persetujuanDigital->first();
                $tindakanList      = $helpdesk->tindakanPerbaikan ?? collect();
                $riwayatItem       = $helpdesk->riwayat->first();
                $waktuSelesai      = $persetujuan?->waktu_persetujuan
                                        ?? $riwayatItem?->waktu_diselesaikan;
                $namaPersetujui    = $riwayatItem?->pelapor?->nama_lengkap
                                        ?? $riwayatItem?->pelapor?->name
                                        ?? $persetujuan?->penyetuju?->nama_lengkap
                                        ?? $persetujuan?->penyetuju?->name
                                        ?? '-';
                $nipPersetujui     = $riwayatItem?->pelapor?->nip
                                        ?? $persetujuan?->penyetuju?->nip
                                        ?? '-';
                $jabatanPersetujui = $riwayatItem?->pelapor?->jabatan_departemen
                                        ?? $persetujuan?->penyetuju?->jabatan_departemen
                                        ?? 'Administrator IT';
                $tanggalDokumen    = $waktuSelesai
                                        ? \Carbon\Carbon::parse($waktuSelesai)->translatedFormat('j F Y')
                                        : now()->translatedFormat('j F Y');
            @endphp

            <div class="doc-meta">
                <table>
<tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td><strong>{{ $helpdesk->nomor_surat }}</strong></td>
                    </tr>
<tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>
                            @php
                                $jmlFotoKeluhan = is_array($helpdesk->foto_helpdesk) ? count($helpdesk->foto_helpdesk) : 0;
                                $jmlFotoTindakan = 0;
                                foreach ($tindakanList as $tk) {
                                    $jmlFotoTindakan += (is_array($tk->foto_tindakan)) ? count($tk->foto_tindakan) : 0;
                                }
                                $totalLampiran = $jmlFotoKeluhan + $jmlFotoTindakan;
                            @endphp
                            {{ $totalLampiran > 0 ? $totalLampiran.' (foto keluhan &amp; tindakan)' : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>Perihal</td>
                        <td>:</td>
                        <td>Laporan Helpdesk Teknologi Informasi</td>
                    </tr>
                </table>
                <div style="text-align:right; font-size:11pt;">
                    Makassar, {{ $tanggalDokumen }}
                </div>
            </div>

            {{-- JUDUL DOKUMEN --}}
            <div class="doc-title-section">
                <div class="doc-title">Laporan Resmi Helpdesk</div>
                <div class="doc-subtitle">Teknologi Informasi &amp; Komunikasi</div>
            </div>

            {{-- PEMBUKA --}}
            <div class="doc-text">
                Yang bertanda tangan di bawah ini menyatakan bahwa telah dilakukan penanganan dan
                penyelesaian terhadap laporan keluhan / gangguan teknis yang diajukan melalui
                Sistem Helpdesk Elektronik (SHELTER) Kantor Otoritas Bandar Udara Wilayah V Makassar,
                dengan rincian sebagai berikut:
            </div>

            {{-- DATA LAPORAN --}}
            <div class="section-title">I. Data Laporan</div>
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="lbl">Keterangan</th>
                        <th class="sep"></th>
                        <th class="val">Informasi</th>
                    </tr>
                </thead>
                <tbody>
<tr>
                        <td class="lbl">Nomor Tiket</td>
                        <td class="sep">:</td>
                        <td class="val"><strong>{{ $helpdesk->nomor_Helpdesk }}</strong></td>
                    </tr>
                    <tr>
                        <td class="lbl">Nama Pelapor</td>
                        <td class="sep">:</td>
                        <td class="val">{{ $helpdesk->pelapor?->nama_lengkap ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="lbl">NIP Pelapor</td>
                        <td class="sep">:</td>
                        <td class="val">{{ $helpdesk->pelapor?->nip ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="lbl">Unit / Departemen</td>
                        <td class="sep">:</td>
                        <td class="val">{{ $helpdesk->pelapor?->jabatan_departemen ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="lbl">Judul Masalah</td>
                        <td class="sep">:</td>
                        <td class="val"><strong>{{ $helpdesk->judul_masalah }}</strong></td>
                    </tr>
                    <tr>
                        <td class="lbl">Deskripsi Keluhan</td>
                        <td class="sep">:</td>
                        <td class="val" style="white-space:pre-line;">{{ $helpdesk->deskripsi_keluhan }}</td>
                    </tr>
                    <tr>
                        <td class="lbl">Tanggal Laporan</td>
                        <td class="sep">:</td>
                        <td class="val">
                            {{ $helpdesk->tanggal_lapor
                                ? $helpdesk->tanggal_lapor->translatedFormat('d F Y, H:i')
                                : '-' }} WIB
                        </td>
                    </tr>
                    <tr>
                        <td class="lbl">Tanggal Selesai</td>
                        <td class="sep">:</td>
                        <td class="val">
                            {{ $waktuSelesai
                                ? \Carbon\Carbon::parse($waktuSelesai)->translatedFormat('d F Y, H:i')
                                : '-' }} WIB
                        </td>
                    </tr>
                    <tr>
                        <td class="lbl">Status Validasi</td>
                        <td class="sep">:</td>
                        <td class="val">
                            {{ $persetujuan?->status_dokumen ?? 'Belum Divalidasi' }}
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- LOG TINDAKAN TEKNIS --}}
            <div class="section-title">II. Log Tindakan Teknis</div>
            @if($tindakanList && $tindakanList->count() > 0)
                @foreach($tindakanList as $tindakan)
                    <div class="tindakan-item">
                        <div class="tindakan-meta">
                            <strong>Tindakan #{{ $loop->iteration }}</strong>
                            &nbsp;&mdash;&nbsp;
                            {{ $tindakan->waktu_tindakan
                                ? \Carbon\Carbon::parse($tindakan->waktu_tindakan)->translatedFormat('d F Y, H:i')
                                : '-' }} WIB
                        </div>
                        {{ $tindakan->deskripsi_tindakan }}
                    </div>
                @endforeach
@else
                <div style="font-size:10pt; color:#737780; padding:8px 12px; background:#f7f9fb; border-left:3px solid #c3c6d1; margin-bottom:12px;">
                    Tidak ada log tindakan teknis yang tercatat.
                </div>
            @endif

            {{-- LAMPIRAN FOTO --}}
            <div class="section-title">III. Lampiran Foto</div>

            {{-- Foto Keluhan --}}
            <div class="lampiran-sub">A. Foto Keluhan</div>
            @if(is_array($helpdesk->foto_helpdesk) && count($helpdesk->foto_helpdesk) > 0)
                <div class="lampiran-grid">
                    @foreach($helpdesk->foto_helpdesk as $foto)
                        @php $isVideo = preg_match('/\.(mp4|mov|avi|webm|mkv)$/i', $foto); @endphp
                        <div class="lampiran-item">
                            @if($isVideo)
                                <video src="{{ asset($foto) }}" controls preload="metadata"></video>
                            @else
                                <img src="{{ asset($foto) }}" alt="Foto Keluhan" />
                            @endif
                            <div class="lampiran-caption">Foto Keluhan #{{ $loop->iteration }}</div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="lampiran-empty">Tidak ada foto keluhan yang dilampirkan.</div>
            @endif

            {{-- Foto Tindakan --}}
            <div class="lampiran-sub">B. Foto Tindakan</div>
            @if($tindakanList && $tindakanList->count() > 0)
                @php $adaFotoTindakan = false; @endphp
                @foreach($tindakanList as $tindakan)
                    @if(is_array($tindakan->foto_tindakan) && count($tindakan->foto_tindakan) > 0)
                        @php $adaFotoTindakan = true; @endphp
                        <div class="lampiran-sub" style="font-size:9.5pt; margin-top:6px; color:#43474f;">
                            Tindakan #{{ $loop->iteration }}
                        </div>
                        <div class="lampiran-grid">
                            @foreach($tindakan->foto_tindakan as $foto)
                                @php $isVideo = preg_match('/\.(mp4|mov|avi|webm|mkv)$/i', $foto); @endphp
                                <div class="lampiran-item">
                                    @if($isVideo)
                                        <video src="{{ asset($foto) }}" controls preload="metadata"></video>
                                    @else
                                        <img src="{{ asset($foto) }}" alt="Foto Tindakan" />
                                    @endif
                                    <div class="lampiran-caption">Foto Tindakan #{{ $loop->iteration }}</div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
                @if(!$adaFotoTindakan)
                    <div class="lampiran-empty">Tidak ada foto tindakan yang dilampirkan.</div>
                @endif
            @else
                <div class="lampiran-empty">Tidak ada foto tindakan yang dilampirkan.</div>
            @endif

            {{-- PENUTUP --}}
            <div class="doc-text" style="margin-top:12px;">
                Demikian laporan resmi ini dibuat dengan sebenar-benarnya untuk dapat dipergunakan
                sebagaimana mestinya. Dokumen ini telah disetujui secara digital melalui sistem
                SHELTER dan dapat diverifikasi keasliannya melalui kode QR yang tertera di bawah.
            </div>

            {{-- TANDA TANGAN --}}
            <div class="ttd-section">

                {{-- TTD KIRI: Pelapor --}}
                <div class="ttd-block">
                    <div class="ttd-role">Pelapor,</div>
                    <div class="ttd-instansi">
                        {{ $helpdesk->pelapor?->jabatan_departemen ?? 'Pegawai' }}<br>
                    </div>

                    <div class="ttd-qr-wrap">
                        <div id="qr-pelapor" class="ttd-qr"></div>
                    </div>

                    <div>
                        <span class="ttd-name">{{ $helpdesk->pelapor?->nama_lengkap ?? '-' }}</span>
                    </div>
                    <div class="ttd-nip">NIP. {{ $helpdesk->pelapor?->nip ?? '-' }}</div>
                </div>

                <div style="flex:0.4;"></div>

                {{-- TTD KANAN: Admin IT --}}
                <div class="ttd-block">
                    <div class="ttd-role">Mengetahui,</div>
                    <div class="ttd-instansi">
                        {{ $jabatanPersetujui }}<br>
                    </div>

                    <div class="ttd-qr-wrap">
                        <div id="qr-admin" class="ttd-qr"></div>
                    </div>

                    <div>
                        <span class="ttd-name">{{ $namaPersetujui }}</span>
                    </div>
                    <div class="ttd-nip">NIP. {{ $nipPersetujui }}</div>
                </div>

            </div>
        </div>{{-- end .page --}}
    </div>{{-- end .document-wrapper --}}

    {{-- Hidden QR URL inputs --}}
    <input type="hidden" id="qr-url-pelapor"
        value="{{ url('/verifikasi/' . $helpdesk->nomor_Helpdesk) }}" />
    <input type="hidden" id="qr-url-admin"
        value="{{ url('/verifikasi-admin/' . $helpdesk->nomor_Helpdesk) }}" />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlPelapor = document.getElementById('qr-url-pelapor').value;
            const urlAdmin   = document.getElementById('qr-url-admin').value;

            const opts = {
                width: 68,
                height: 68,
                colorDark: '#001e40',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.M,
            };

            if (typeof QRCode !== 'undefined') {
                new QRCode(document.getElementById('qr-pelapor'), { ...opts, text: urlPelapor });
                new QRCode(document.getElementById('qr-admin'),   { ...opts, text: urlAdmin });
            }
        });
    </script>
</body>
</html>
