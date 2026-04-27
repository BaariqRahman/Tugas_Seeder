<!DOCTYPE html>
<html>
<head>
    <title>Data KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h3 class=" text-center mb-3">Data Mahasiswa</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Dosen</th>
                <th>Mata Kuliah</th>
            </tr>
        </thead>

        <tbody>
            @foreach($krs as $i => $k)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $k->npm }}</td>
                <td>{{ $k->mahasiswa->nama ?? '-' }}</td>
                <td>{{ $k->mahasiswa->dosen->nama ?? '-' }}</td>
                <td>{{ $k->matakuliah->nama_matakuliah ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>