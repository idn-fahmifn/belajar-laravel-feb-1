<!-- memanggil template -->
@extends('layouts.app')

<!-- area konten untuk halaman mobil. -->

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4 shadow-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h5 class="text-bold">Tambah Mobil</h5>
                        <p>Form tambah mobil baru.</p>
                    </div>
                </div>
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Merek Mobil</label>
                                <input type="text" name="merek" class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Tahun keluar</label>
                                <input type="number" name="tahun_keluar" class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Jenis Mobil</label>
                                <select name="jenis" class="form-control p-2">
                                    <option value="">-Pilih Jenis-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Deskripsi Mobil</label>
                                <textarea name="deskripsi" class="form-control p-2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Tabah Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection