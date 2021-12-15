<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-4">

            <h3>Edit Pembina</h3>

    <a href="/bimits/ketua"> Kembali</a>

    <br/>
    <br/>

    @foreach($table_pembina as $p)
    <form action="/bimits/update-pembina" method="post">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="id" value="{{ $p->id }}"> <br/> --}}

        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIP</label>
    <input type="number" name="nip" required="required" class="form-control" value="{{ $p->nip }}">
    <div id="emailHelp" class="form-text">Masukkan NIP</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" name="nama" required="required" class="form-control" value="{{ $p->nama }}">
    <div id="emailHelp" class="form-text">Masukkan Nama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" required="required" class="form-control"  value="{{ $p->jabatan }}">
    <div id="emailHelp" class="form-text">Masukkan Jabatan</div>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit">
    </form>
    @endforeach

        </div>
    </div>
    

</body>
</html>