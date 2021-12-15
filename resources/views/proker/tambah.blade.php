


<!DOCTYPE html>
<html>
<head>
	<title>Data Proker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="row justify-content-center mt-5">
    <div class="col-5">

	<h3>Tambah Data Proker</h3>

	<a @yield('href')>Kembali</a>

	<br/>
	<br/>
<form @yield('action') method="post">
	{{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_Proker</label>
    <input type="text" name="id_proker" required="required" class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Masukkan NRP</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Pengurus</label>
    <input type="text" name="nama_pengurus" required="required" class="form-control" >
	<div id="emailHelp" class="form-text">Masukkan Nama Pengurus</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NRP Pengurus</label>
    <input type="text" name="nrp_pengurus" required="required" class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Masukkan NRP Pengurus</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIP</label>
    <input type="text" name="nip" required="required" class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Masukkan NIP</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Durasi (Jam)</label>
    <input type="text" name="durasi_dalam_jam" required="required" class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Durasi (Jam)</div>
  </div>


  <input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>

	

</body>
</html>