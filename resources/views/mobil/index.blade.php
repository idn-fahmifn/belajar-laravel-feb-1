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
                        <h5 class="text-bold">Data Mobil</h5>
                        <p>List data mobil milik saya</p>

                        <!-- alert -->
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yea!!</strong> {{ session('success') }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                    </div>

                    <a href="{{route('mobil.create')}}" class="btn btn-warning">Tambah Mobil</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Merk</th>
                            <th>Tahun</th>
                            <th>Jenis</th>
                        </thead>
                        <tbody>
                            @foreach ($mobil as $item)
                            <tr>
                                <td>{{$item->merek}}</td>
                                <td>{{$item->tahun_keluar}}</td>
                                <td>{{$item->jenis}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection