<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'id_alat',
        'id_peminjaman',
        'jumlah',
        'tgl_peminjaman',
        'kondisi_pinjam',
    ];
}