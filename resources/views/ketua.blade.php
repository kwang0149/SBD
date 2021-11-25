<!DOCTYPE html>
<html>
    <head>
        <title>User View Ketua</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h2 class="text-center">User View Ketua</h2>

        

        <br />
        <br />

        <div class="row justify-content-center">
        <div class="col-auto">
            <h4>Pengurus</h4>
            <a href="/pengurus/tambah"> + Tambah Data Baru</a>
      <table class="table table-responsive table-bordered mb-5 pb-5 ">
          
         <tr>
                <th>Nama</th>
                <th>NRP</th>
                <th>Jabatan</th>
            </tr>
            @foreach($table_pengurus as $p)
            <tr>
                <td>{{ $p->nama  }}</td>
                <td>{{ $p->nrp }}</td>
                <td>{{ $p->jabatan  }}</td>
                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $p->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $p->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
      </table>

             {{-- anggota --}}
             <h4>Anggota</h4>
             <a href="/pengurus/tambah"> + Tambah Data Baru</a>
                <table class="table table-responsive table-bordered mb-5 pb-5">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
            </tr>
            @foreach($table_anggota as $a)
            <tr>
                <td>{{ $a->nama  }}</td>
                <td>{{ $a->nrp }}</td>
                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $a->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $a->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

        {{-- mahasiswa --}}
        <h4>Mahasiswa</h4>
        <a href="/pengurus/tambah"> + Tambah Data Baru</a>
         <table class="table table-responsive table-bordered mb-5 pb-5">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
            </tr>
            @foreach($table_mahasiswa as $m)
            <tr>
                <td>{{ $m->nrp  }}</td>
                <td>{{ $m->nomor_wa}}</td>
                <td>{{ $m->nomor_wa}}</td>
                <td>{{ $m->nomor_wa}}</td>
                <td>{{ $m->nama}}</td>
                <td>{{ $m->id_line}}</td>
                <td>{{ $m->tempat_tanggal_lahir}}</td>
                <td>{{ $m->alamat_lengkap}}</td>
                <td>{{ $m->departemen}}</td>
                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $a->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $a->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>


        {{-- proker --}}
        <h4>Proker</h4>
        <a href="/pengurus/tambah"> + Tambah Data Baru</a>
        <table class="table table-responsive table-bordered mb-5 pb-5">
            <tr>
                <th>Proker</th>
                <th>Nama Pengurus</th>
                <th>NRP Pengurus</th>
                <th>NIP</th>
                <th>Durasi(jam)</th>
            </tr>
            @foreach($table_proker as $p)
            <tr>
                <td>{{ $p->proker  }}</td>
                <td>{{ $p->nama_pengurus }}</td>
                <td>{{ $p->nrp_pengurus }}</td>
                <td>{{ $p->nip }}</td>
                <td>{{ $p->durasi_dalam_jam }}</td>
                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $a->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $a->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>



        {{-- Pengurus Oprec --}}
        <h4>Pengurus Oprec</h4>
        <a href="/pengurus/tambah"> + Tambah Data Baru</a>
        <table class="table table-responsive table-bordered mb-5 pb-5">
            <tr>
                <th>NRP Pengurus</th>
                <th>Nama Pengurus</th>
            </tr>
            @foreach($table_pengurus_oprec as $po)
            <tr>
                <td>{{ $po->nrp_pengurus  }}</td>
                <td>{{ $po->nama_pengurus }}</td>

                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $a->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $a->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

        {{-- Peserta Oprec --}}
        <h4>Peserta</h4>
        <a href="/pengurus/tambah"> + Tambah Data Baru</a>
                <table class="table table-responsive table-bordered mb-5 pb-5">
            <tr>
                <th>NRP Peserta</th>
                <th>Nama Peserta</th>
                <th>NRP Pengurus</th>
                <th>Lolos Seleksi</th>
                <th>Motivasi</th>
                <th>Durasi(menit)</th>
            </tr>
            @foreach($table_peserta_oprec as $po)
            <tr>
                <td>{{ $po->nrp_peserta  }}</td>
                <td>{{ $po->nama_peserta }}</td>
                <td>{{ $po->nrp_pengurus }}</td>
                <td>{{ $po->lolos_seleksi }}</td>
                <td>{{ $po->motivasi }}</td>
                <td>{{ $po->durasi_dalam_menit }}</td>

                <td>
                    <a class="text-decoration-none" href="/pendapatan/edit/{{ $a->nrp }}">Edit</a>
                    |
                    <a class="text-decoration-none" href="/pendapatan/hapus/{{ $a->nrp }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  </div>
    </body>
</html>
