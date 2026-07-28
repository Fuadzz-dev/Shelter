<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanDigital extends Model
{
    use HasFactory;

    protected $table = 'persetujuan_digital';
    protected $primaryKey = 'id_persetujuan';
    public $timestamps = false;

    protected $fillable = [
        'id_helpdesk',
        'id_penyetuju',
        'waktu_persetujuan',
        'token_validasi',
        'status_dokumen',
    ];

    protected $casts = [
        'waktu_persetujuan' => 'datetime',
    ];

    /**
     * Relasi ke helpdesk.
     */
    public function helpdesk()
    {
        return $this->belongsTo(Helpdesk::class, 'id_helpdesk', 'id_helpdesk');
    }

    /**
     * Relasi ke penyetuju (user).
     */
    public function penyetuju()
    {
        return $this->belongsTo(User::class, 'id_penyetuju', 'user_id');
    }
}

