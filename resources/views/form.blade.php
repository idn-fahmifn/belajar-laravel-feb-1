<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Umur</title>
</head>

<body>
    <h1>Halaman Form Umur</h1>
    <p>Masukan umur kamu dibawah : </p>

    <!-- menampilkan error middleware -->
    @if (session('gagal'))
    <span style="color: red;">Oops, ada error. {{session('gagal')}}</span>
    @endif

    <!-- menampilkan -->
    @if ($errors->any())
    @foreach ($errors->all() as $item)
    <ul>
        <li>{{$item}}</li>
    </ul>
    @endforeach
    @endif


    <!-- form -->
    <form action="{{route('proses')}}" method="post">
        @csrf
        <div class="group">
            <label>Masukan Nama Kamu</label>
            <input type="text" name="nama" required>
        </div>
        <div class="group">
            <label>Berapa umur kamu</label>
            <input type="number" name="umur" required>
        </div>
        <div class="group">
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>

</html>