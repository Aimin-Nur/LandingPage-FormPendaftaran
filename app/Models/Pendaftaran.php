<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public $timestamps = false;
    protected $table = 'pendaftaran';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'hp_ortu',
        'bukti_tf',
        'status',
    ];
}
