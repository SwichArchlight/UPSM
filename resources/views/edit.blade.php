<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="card m-5 p-5">
        <div class="card-body">      
            <form method="post" action="/edit/update/{{ $siswa->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label for="" class="form-label">NIS</label>
                <input type="number" class="form-control" name="nis" id="nis" placeholder="nis" maxlength="5" value="{{ $siswa->NIS }}">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama" value="{{ $siswa->nama_siswa }}">
                <label for="" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="{{ $siswa->kelas }}">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ $siswa->jurusan }}">
                <button type="submit" class="btn btn-success mt-4">Submit</button>
          </form>  
              </div>
    </div>    
</body>

</html>