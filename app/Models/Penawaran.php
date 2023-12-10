<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    use HasFactory;
    protected $table = 'penawaran';
    protected $fillable = [
        'id',
        'nama_produk',
        'kuota',
        'gambar',
    ];
}
