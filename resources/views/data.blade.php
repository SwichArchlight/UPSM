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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
</head>

<body>
  

<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>data siswa</h1>
            </div>
            <div class="card-body">
                <a class="btn btn-primary m-3" href="/tambah" role="button"> <i class="fas fa-plus"></i> Tambah Data Siswa </a>
    <button class="btn btn-danger" onclick="exportTabelKeCSV('datasiswa.csv')"> <i class="fas fa-print"></i> Download CSV </button>    
                    <table class="table table-border" id="tabs" >
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Option</th>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $siswa)
                               <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $siswa->NIS }} </td>
                                <td> {{ $siswa->nama_siswa }}</td>
                                <td> {{ $siswa->jurusan }}</td>
                                <td> {{ $siswa->kelas }}</td>
                                <td>
                                    <a class="btn btn-primary mb-1" href="edit/{{ $siswa->id }}" role="button"> <i class="fas fa-cog"></i> Edit</a>
                                    <a class="btn btn-danger mb-1" href="delete/{{ $siswa->id }}" role="button" data-confirm-delete="true">  <i class="fas fa-trash"></i> Hapus </a>
                                </td>
                            @endforeach
                        </tbody>
                    </table>              
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    
</script>
<script>
    function exportTabelKeCSV(filename) {
    var csv = [];
 var baris = document.querySelectorAll("table tr");
 
    for (var i = 0; i < baris.length; i++) {
  var row = [], cols = baris[i].querySelectorAll("td, th");
  
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
  csv.push(row.join(","));  
 }
    // Download file CSV
    downloadCSV(csv.join("\n"), filename);
}
function downloadCSV(csv, filename) {
    var fileCSV;
    var linkDonwload;
    // File CSV
    fileCSV = new Blob([csv], {type: "text/csv"});
    // Link download
    linkDonwload = document.createElement("a");
    // Nama file
    linkDonwload.download = filename;
    // Membuat link ke file
    linkDonwload.href = window.URL.createObjectURL(fileCSV);
    // Menyembunyikan link download
    linkDonwload.style.display = "none";
    // Menambahkan link ke DOM
    document.body.appendChild(linkDonwload);
    // Klik link download
    linkDonwload.click();
}
</script>
<script>
    new DataTable('#tabs');
</script>
</html>