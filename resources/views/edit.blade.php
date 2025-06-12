<!DOCTYPE html>
<html>
<head>
	<title>Edit Pegawai</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai">Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

		{{-- Field hidden untuk identifikasi primary key --}}
		<input type="hidden" name="kodepegawai" value="{{ $pegawai->kodepegawai }}"> <br/>

		Nama Lengkap:
		<input type="text" required="required" name="namalengkap" value="{{ $pegawai->namalengkap }}"> <br/>

		Divisi:
		<input type="text" required="required" name="divisi" value="{{ $pegawai->divisi }}"> <br/>

		Departemen:
		<input type="text" required="required" name="departemen" value="{{ $pegawai->departemen }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
