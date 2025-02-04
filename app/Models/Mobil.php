<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{

    use HasFactory;

    // digunakan untuk komunikasi dengan tabel mobil
    protected $table = 'mobil'; //mendefiniskan nama tabel.

    // masukan nama nama kolom/field yang ada di tabel.
    protected $fillable = 
    [
        'merek',
        'tahun_keluar', 
        'jenis',
        'deskripsi'
    ];
}
