<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakanPerbaikan extends Model
{
    use HasFactory;

    protected $table = 'tindakan_perbaikan';
    protected $primaryKey = 'id_tindakan';
    public $timestamps = false;

    protected $fillable = [
        'id_helpdesk',
        'deskripsi_tindakan',
        'foto_tindakan',
        'waktu_tindakan',
    ];

    protected $casts = [
        'foto_tindakan' => 'array',
        'waktu_tindakan' => 'datetime',
    ];

    /**
     * Relasi ke helpdesk.
     */
    public function helpdesk()
    {
        return $this->belongsTo(Helpdesk::class, 'id_helpdesk', 'id_helpdesk');
    }
}

