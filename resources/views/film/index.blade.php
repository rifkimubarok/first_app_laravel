<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Data Film</h1>
            <div class="col-md-12 table-responsive">
            <!-- setelah tombah tambah data -->
            @if(session('success'))
                <div class="alert alert-success  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('success')}}
                </div>
            @endif
            <a class="btn btn-primary" style="margin-bottom:10px;" href="/film/create">Tambah Data</a>
            <!-- disimpan setelah tombol tambah data -->
            <form action="/film" method="get" role="form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="cari" id="cari" placeholder="Masukan Judul" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Jenis</th>
                        <th>Genre</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($film as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->jenis}}</td>
                        <td>{{$item->genre}}</td>
                        <td>{{$item->tahun}}</td>
                        <td>{{$item->rating}}</td>
                        <td>
                            <a href="/film/{{$item->id}}/update">Update</a> |
                            <a href="/film/{{$item->id}}/delete" onclick="return confirm('Apakah data {{$item->judul}} akan dihapus?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$film->links()}}
            </div>
        </div>
    </div>
</body>
</html>