<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
</head>

<body>
    <h1>List Daftar Mobil saya</h1>

    <table>
        <thead>
            <th>Merek Mobil</th>
            <th>Tahun Keluar</th>
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
    {{ $mobil }}
</body>

</html>