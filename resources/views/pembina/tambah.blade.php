<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Table Pembina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<h3>Data Pembina</h3>

	<a href="/bimits/ketua">Kembali</a>

	<br/>
	<br/>

	<form action="/bimits/simpan-data-pembina-oleh-pembina" method="post">
		{{ csrf_field() }}
		NIP <input type="number" name="nip" required="required"> <br/>
        Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
