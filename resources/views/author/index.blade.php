<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info bg-opacity-10">
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Author</h2>
        <table class="table table-bordered bg-white shadow-sm">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Nama Author</th>
                    <th>Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->country }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>