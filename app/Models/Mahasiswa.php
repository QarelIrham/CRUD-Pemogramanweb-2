<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Supaya Laravel pakai tabel 'mahasiswa' bukan 'mahasiswas'
    protected $table = 'mahasiswa';

    // Kolom yang bisa diisi lewat form
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
