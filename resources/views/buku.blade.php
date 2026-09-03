<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <h1>Daftar Buku Perpustakaan</h1>
    
    <ul>
        @foreach ($buku as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>