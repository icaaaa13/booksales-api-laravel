<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info bg-opacity-10">
    <div class="container mt-5">
        <h2>Daftar Book</h2>
        <table class="table table-bordered mt-3 bg-white">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis (Author)</th>
                    <th>Tahun Rilis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name ?? '-' }}</td>
                    <td>{{ $book->release_year }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
