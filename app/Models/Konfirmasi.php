<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    public $timestamps = false;
    protected $table = 'konfirmasi';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'hp_ortu',
        'bukti_tf',
        'status',
    ];
}
