<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    use HasFactory;

    protected $table = 'helpdesk';

    protected $primaryKey = 'id_helpdesk';

    public $timestamps = false;

    protected $fillable = [
        'nomor_Helpdesk',
        'id_pelapor',
        'judul_masalah',
        'deskripsi_keluhan',
        'foto_helpdesk',
        'status_Helpdesk',
        'tanggal_lapor',
    ];

    protected $casts = [
        'foto_helpdesk' => 'array',
        'tanggal_lapor' => 'datetime',
    ];

    /**
     * Relasi ke pelapor (user).
     */
    public function pelapor()
    {
        return $this->belongsTo(User::class, 'id_pelapor', 'user_id');
    }

    /**
     * Relasi ke riwayat helpdesk.
     */
    public function riwayat()
    {
        return $this->hasMany(RiwayatHelpdesk::class, 'id_helpdesk', 'id_helpdesk');
    }

    /**
     * Relasi ke tindakan perbaikan.
     */
    public function tindakanPerbaikan()
    {
        return $this->hasMany(TindakanPerbaikan::class, 'id_helpdesk', 'id_helpdesk');
    }

    /**
     * Relasi ke persetujuan digital.
     */
    public function persetujuanDigital()
    {
        return $this->hasMany(PersetujuanDigital::class, 'id_helpdesk', 'id_helpdesk');
    }

/**
     * Generate nomor tiket helpdesk otomatis.
     * Format: TK-{tahun}-{nomor urut 3 digit}
     * Contoh: TK-2026-001
     */
    public static function generateNomorHelpdesk(): string
    {
        $year = now()->format('Y');
        $prefix = 'TK-'.$year.'-';

        $last = self::query()
            ->where('nomor_Helpdesk', 'like', $prefix.'%')
            ->orderByRaw('CAST(SUBSTRING_INDEX(nomor_Helpdesk, "-", -1) AS UNSIGNED) desc')
            ->lockForUpdate()
            ->first();

        $sequence = $last ? ((int) (explode('-', $last->nomor_Helpdesk)[2] ?? 0)) + 1 : 1;

        // Pastikan tidak ada duplikat
        do {
            $nomor = $prefix.str_pad($sequence, 3, '0', STR_PAD_LEFT);
            $exists = self::where('nomor_Helpdesk', $nomor)->exists();
            if ($exists) {
                $sequence++;
            }
        } while ($exists);

        return $nomor;
    }

    /**
     * Generate nomor surat resmi OBU V Makassar.
     * Format: W.30/{nomor urut}/OBU.V/{tahun}
     * Nomor urut diambil dari urutan buntut nomor tiket.
     * Contoh: W.30/5/OBU.V/2026
     */
    public function getNomorSuratAttribute(): string
    {
        if (preg_match('/^TK-(\d{4})-(\d+)$/', $this->nomor_Helpdesk, $m)) {
            $year = $m[1];
            $seq  = (int) $m[2];
            return 'W.30/'.$seq.'/OBU.V/'.$year;
        }

        // Fallback: gunakan nomor tiket apa adanya
        return $this->nomor_Helpdesk;
    }
}
