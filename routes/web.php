<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Middleware\UmurMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// menampilkan data dengan tipe data string

Route::get('fahmi', function () {
    // perintahnya
    // outputnya :
    return "hallo, nama saya fahmi";
});

Route::get('halaman-fahmi', function () {
    // perintahnya
    // menampilkan file fahmi.blade.php
    return view('fahmi');
})->name('route-fahmi');




// Route dengan parameter
Route::get('siswa/{param}', function ($nama) {
    // output
    return 'Nama siswa yang dipanggil adalah : ' . $nama;
})->name('route-siswa');

Route::get('mahasiswa/{param?}', function ($nama = null) {
    // output
    return 'Nama mahasiswa yang dipanggil adalah : ' . $nama;
});

Route::get('mobil', function () {
    // output
    return redirect()->route('contoh');
});


/**
 * Grouping route
 * group prefix nama route : kelas
 * cara memanggilnya localhost:8000/route/nama-uri
 */
Route::prefix('kelas')->group(function () {
    Route::get('ccna', function () {
        return 'Selamat datang di kelas ccna';
    })->name('ccna');

    Route::get('laravel', function () {
        return 'Selamat datang di kelas laravel';
    })->name('laravel');

    Route::get('mtcna', function () {
        return 'Selamat datang di kelas mtcna';
    })->name('mtcna');

    Route::get('mtcre', function () {
        return 'Selamat datang di kelas mtcre';
    })->name('mtcre');
});

// Middleware

// route untuk halaman form
Route::get('form-umur', function(){
    return view('form');
})->name('form-umur');

// Route halaman berhasil
Route::get('berhasil', function(){
    return 'Berhasil, umur anda memenuhi syarat';
})->name('success')->middleware(UmurMiddleware::class);

// Route untuk proses mengambil umur.
Route::post('proses', function(Request $request){

// validasi data
$request->validate([
    'nama' => 'string|min:2|max:20|required',
    'umur' => 'integer|min:1|max:100|required'
]);
// mengolah nilai yang diinputkan.
$request->session()->put('nama', $request->nama);
$request->session()->put('umur', $request->umur);
return redirect()->route('success');
})->name('proses');

Route::prefix('karyawan')->group(function(){
    Route::get('divisi', [KaryawanController::class, 'index_divisi'])->name('karyawan.divisi');
    Route::get('semua', [KaryawanController::class, 'karyawan_semua'])->name('karyawan.semua');
});
