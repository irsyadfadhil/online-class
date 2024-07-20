<!DOCTYPE html>
<html>
<head>
    <title>Tambah Fitur</title>
</head>
<body>
    <h1>Tambah Fitur Baru</h1>
    <form action="{{ route('features.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <label for="sub_title1">Sub Judul 1:</label>
        <input type="text" name="sub_title1" id="sub_title1">
        <br>
        <label for="sub_description1">Sub Deskripsi 1:</label>
        <textarea name="sub_description1" id="sub_description1"></textarea>
        <br>
        <label for="sub_title2">Sub Judul 2:</label>
        <input type="text" name="sub_title2" id="sub_title2">
        <br>
        <label for="sub_description2">Sub Deskripsi 2:</label>
        <textarea name="sub_description2" id="sub_description2"></textarea>
        <br>
        <label for="sub_title3">Sub Judul 3:</label>
        <input type="text" name="sub_title3" id="sub_title3">
        <br>
        <label for="sub_description3">Sub Deskripsi 3:</label>
        <textarea name="sub_description3" id="sub_description3"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('features.index') }}">Kembali ke Daftar Fitur</a>
</body>
</html>
