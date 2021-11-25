<!DOCTYPE html>
<html>
    <head>
        <title>Database BIMITS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h2 class="text-center">User View Mahasiswa</h2>

        <br />
        <br />

<div class="row justify-content-center">
    <div class="col-auto">
      <table class="table table-responsive table-bordered mb-5 pb-5">
        
            <tr>
                <th>NRP</th>
                <th>Nomor WA</th>
                <th>Nama</th>
                <th>ID LINE</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Alamat Lengkap</th>
                <th>Departemen</th>
            </tr>
            @foreach($table_mahasiswa as $m)
            <tr>
                <td>{{ $m->nrp  }}</td>
                <td>{{ $m->nomor_wa}}</td>
                <td>{{ $m->nama}}</td>
                <td>{{ $m->id_line}}</td>
                <td>{{ $m->tempat_tanggal_lahir}}</td>
                <td>{{ $m->alamat_lengkap}}</td>
                <td>{{ $m->departemen}}</td>

            </tr>
            @endforeach
 
      </table>
    </div>
  </div>
{{-- mahasiswa --}}
         

    </body>
</html>