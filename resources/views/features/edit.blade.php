<!DOCTYPE html>
<html>
<head>
    <title>Edit Fitur</title>
</head>
<body>
    <h1>Edit Fitur</h1>
    <form action="{{ route('features.update', $feature->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $feature->name }}" required>
        <br>
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" value="{{ $feature->title }}" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required>{{ $feature->description }}</textarea>
        <br>
        <label for="sub_title1">Sub Judul 1:</label>
        <input type="text" name="sub_title1" id="sub_title1" value="{{ $feature->sub_title1 }}">
        <br>
        <label for="sub_description1">Sub Deskripsi 1:</label>
        <textarea name="sub_description1" id="sub_description1">{{ $feature->sub_description1 }}</textarea>
        <br>
        <label for="sub_title2">Sub Judul 2:</label>
        <input type="text" name="sub_title2" id="sub_title2" value="{{ $feature->sub_title2 }}">
        <br>
        <label for="sub_description2">Sub Deskripsi 2:</label>
        <textarea name="sub_description2" id="sub_description2">{{ $feature->sub_description2 }}</textarea>
        <br>
        <label for="sub_title3">Sub Judul 3:</label>
        <input type="text" name="sub_title3" id="sub_title3" value="{{ $feature->sub_title3 }}">
        <br>
        <label for="sub_description3">Sub Deskripsi 3:</label>
        <textarea name="sub_description3" id="sub_description3">{{ $feature->sub_description3 }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('features.index') }}">Kembali ke Daftar Fitur</a>
</body>
</html>
