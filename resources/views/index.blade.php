<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lapangan</title>
</head>
<body>
    <h1>Daftar Lapangan</h1>
    <ul>
        @foreach($lapangans as $lapangan)
            <li>
                {{ $lapangan->nama }} - {{ $lapangan->jenis }} - Rp{{ number_format($lapangan->harga_per_jam) }}
            </li>
        @endforeach
    </ul>
</body>
</html>
