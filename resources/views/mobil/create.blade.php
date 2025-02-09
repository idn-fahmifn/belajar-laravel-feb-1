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
                <form action="{{route('mobil.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Merek Mobil</label>
                                <input type="text" name="merek" required class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Tahun keluar</label>
                                <input type="number" name="tahun_keluar" required class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Jenis Mobil</label>
                                <select name="jenis" class="form-control p-2" required>
                                    <option value="">-Pilih Jenis-</option>
                                    <option value="suv">SUV</option>
                                    <option value="lcgc">LCGC</option>
                                    <option value="sport">SPORT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Deskripsi Mobil</label>
                                <textarea name="deskripsi" class="form-control p-2" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Tabah Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection