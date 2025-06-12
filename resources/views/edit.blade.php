<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Pegawai</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #f4f4f4;">

  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Edit Data Pegawai</h3>
      </div>
      <div class="card-body">
        <a href="/pegawai" class="btn btn-secondary mb-3">← Kembali</a>

        <form action="/pegawai/update" method="post">
          {{ csrf_field() }}
          
          <!-- Hidden field for primary key -->
          <input type="hidden" name="kodepegawai" value="{{ $pegawai->kodepegawai }}">

          <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" required value="{{ $pegawai->namalengkap }}">
          </div>

          <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" required value="{{ $pegawai->divisi }}">
          </div>

          <div class="form-group">
            <label for="departemen">Departemen</label>
            <input type="text" class="form-control" id="departemen" name="departemen" required value="{{ $pegawai->departemen }}">
          </div>

          <button type="submit" class="btn btn-success">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
