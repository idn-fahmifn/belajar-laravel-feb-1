<!-- memanggil template -->
@extends('layouts.app')

<!-- area konten untuk halaman mobil. -->

@section('content')
<div class="container">
    <div class="row">
        <!-- detail mobil -->
        <div class="col-md-4 mt-2">
            <div class="card p-4 shadow-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h5 class="text-bold">{{$data->merek}}</h5>
                        <p>Detail lengkap mobil {{ $data->merek }}.</p>
                    </div>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>Merek Mobil</th>
                        <td>{{$data->merek}}</td>
                    </tr>
                    <tr>
                        <th>Tahun Produksi</th>
                        <td>{{$data->tahun_keluar}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Mobil</th>
                        <td>
                            @if ($data->jenis == 'lcgc')
                            <span class="badge text-bg-success">Mobil LCGC</span>
                            @elseif($data->jenis == 'suv')
                            <span class="badge text-bg-info">Mobil SUV</span>
                            @else
                            <span class="badge text-bg-secondary">Mobil Sport</span>
                            @endif
                        </td>
                    </tr>
                </table>
                {{ $data->deskripsi }}
                <form action="{{route('mobil.destroy', $data->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn text-danger p-0 mt-3 fw-bold" onclick="return confirm('Yakin ni mau dihapus?')">Hapus {{$data->merek}}</button>
                </form>
            </div>
        </div>

        <!-- edit mobil -->
        <div class="col-md-8 mt-2">
            <div class="card p-4 shadow-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h5 class="text-bold">{{$data->merek}}</h5>
                        <p>Detail lengkap mobil {{ $data->merek }}.</p>
                    </div>
                </div>
                
                <!-- alert -->
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Yea!!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{route('mobil.update', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Merek Mobil</label>
                                <input type="text" name="merek" value="{{$data->merek}}" required class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Tahun keluar</label>
                                <input type="number" name="tahun_keluar" value="{{$data->tahun_keluar}}" required class="form-control p-2">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Jenis Mobil</label>
                                <select name="jenis" class="form-control p-2" required>
                                    <option value="{{$data->jenis}}">{{$data->jenis}}</option>
                                    <option value="suv">SUV</option>
                                    <option value="lcgc">LCGC</option>
                                    <option value="sport">SPORT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <label class="text-secondary">Deskripsi Mobil</label>
                                <textarea name="deskripsi" class="form-control p-2" required> {{ $data->deskripsi }} </textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Update Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection