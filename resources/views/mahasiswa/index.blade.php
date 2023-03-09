<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt 5">
        <h1 class="text-center mb-5">Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Fakultas </th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $no => $hasil)
                        <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$hasil->nim}}</td>
                            <td>{{$hasil->nama}}</td>
                            <td>{{$hasil->jurusan}}</td>
                            <td>{{$hasil->fakultas}}</td>

                            <td>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>