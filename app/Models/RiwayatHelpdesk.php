<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatHelpdesk extends Model
{
    use HasFactory;

    protected $table = 'riwayat_helpdesk';
    protected $primaryKey = 'id_riwayat';
    public $timestamps = false;

    protected $fillable = [
        'id_helpdesk',
        'id_tindakan',
        'id_pelapor',
        'judul_masalah',
        'id_persetujuan',
        'waktu_diselesaikan',
    ];

    protected $casts = [
        'waktu_diselesaikan' => 'datetime',
    ];

    /**
     * Relasi ke helpdesk.
     */
    public function helpdesk()
    {
        return $this->belongsTo(Helpdesk::class, 'id_helpdesk', 'id_helpdesk');
    }

    /**
     * Relasi ke pelapor (user).
     */
    public function pelapor()
    {
        return $this->belongsTo(User::class, 'id_pelapor', 'user_id');
    }

    /**
     * Relasi ke tindakan perbaikan.
     */
    public function tindakanPerbaikan()
    {
        return $this->belongsTo(TindakanPerbaikan::class, 'id_tindakan', 'id_tindakan');
    }

    /**
     * Relasi ke persetujuan digital.
     */
    public function persetujuanDigital()
    {
        return $this->belongsTo(PersetujuanDigital::class, 'id_persetujuan', 'id_persetujuan');
    }
}

