@extends('layout/happy')

    @section('title',"User View Mahasiswa")
    @section('konten')


        <h2 class="text-center">User View Mahasiswa</h2>

        <br />
        <br />

<div class="row justify-content-center">
    <div class="col-auto">
      <table class="table table-responsive table-bordered mb-5 pb-5 table-striped">
        
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
         


@endsection