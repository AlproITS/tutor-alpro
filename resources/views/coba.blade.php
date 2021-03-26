<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <ul>
        <li>Buku {{ $buku->nama }} Harga {{ $buku->harga }}</li>
    </ul>
    
    <h2>Nama Pengunjung</h2>
    <ul>
        @foreach($orang as $o)
        <h5>{{ $o }}</h5>
        @endforeach
    </ul>
    <br>

    <h2>Tambah Pengunjung</h2>
    <form method="post" url="{{ route('books.create') }}">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name">

        <label for="name">Harga</label>
        <input type="text" name="price">

        <button type="submit">Add!</button>
    </form>
</body>
</html>