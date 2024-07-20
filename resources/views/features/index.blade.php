<!DOCTYPE html>
<html>
<head>
    <title>Fitur</title>
</head>
<body>
    <h1>Daftar Fitur</h1>
    <a href="{{ route('features.create') }}">Tambah Fitur Baru</a>
    <ul>
        {{-- @foreach ($features as $feature)
            <li>
                <strong>{{ $feature->name }}</strong>
                <p>{{ $feature->title }}</p>
                <p>{{ $feature->description }}</p>
                <a href="{{ route('features.show', $feature->id) }}">Lihat</a>
                <a href="{{ route('features.edit', $feature->id) }}">Edit</a>
                <form action="{{ route('features.destroy', $feature->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach --}}
    </ul>
</body>
</html>
