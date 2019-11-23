<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Tambah Data</h3>
                <form action="/film/creating" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="Dokumenter">Dokumenter</option>
                                <option value="Film">Film</option>
                                <option value="Eksperimental">Eksperimental</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Genre</label>
                            <select name="genre" id="genre" class="form-control">
                                <option value="Aksi">Aksi</option>
                                <option value="Komedi">Komedi</option>
                                <option value="Petualangan">Petualangan</option>
                                <option value="Kejahatan & Gangster">Kejahatan & Gangster</option>
                                <option value="Drama">Drama</option>
                                <option value="Epos/Historical">Epos/Historical</option>
                                <option value="Horror">Horror</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Musikal/Tarian">Musikal/Tarian</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tahun">Tahun</label>
                            <input type="number" name="tahun" id="tahun" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="rating">Rating</label>
                            <input type="number" name="rating" step="0.5" id="rating" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>