<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="row justify-content-center">
		<div class="col-4">

			<h3>Edit Mahasiswa</h3>

	<a href="/bimits/ketua"> Kembali</a>

	<br/>
	<br/>

	@foreach($table_mahasiswa as $p)
	<form @yield('action') method="post">
		{{ csrf_field() }}
		{{-- <input type="hidden" name="id" value="{{ $p->id }}"> <br/> --}}

		<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NRP</label>
    <input type="number" name="nrp" required="required" class="form-control" value="{{ $p->nrp }}">
    <div id="emailHelp" class="form-text">Masukkan NRP</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor WA</label>
    <input type="text" name="nomor_wa" required="required" class="form-control" value="{{ $p->nomor_wa }}">
	<div id="emailHelp" class="form-text">Masukkan Nomor WA</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" required="required" class="form-control"  value="{{ $p->nama }}">
    <div id="emailHelp" class="form-text">Masukkan Nama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Line</label>
    <input type="text" name="id_line" required="required" class="form-control"  value="{{ $p->id_line }}">
    <div id="emailHelp" class="form-text">Masukkan ID Line</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tempat Tanggal Lahir</label>
    <input type="text" name="tempat_tanggal_lahir" required="required" class="form-control"  value="{{ $p->tempat_tanggal_lahir }}">
    <div id="emailHelp" class="form-text">Masukkan Tempat Tanggal Lahir</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
    <input type="text" name="alamat_lengkap" required="required" class="form-control"  value="{{ $p->alamat_lengkap }}">
    <div id="emailHelp" class="form-text">Masukkan Alamat Lengkap</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Departemen</label>
    <input type="text" name="departemen" required="required" class="form-control"  value="{{ $p->departemen }}">
    <div id="emailHelp" class="form-text">Masukkan Nama Departemen</div>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit">
	</form>
	@endforeach

		</div>
	</div>
	

</body>
</html>
