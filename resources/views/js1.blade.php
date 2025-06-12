<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JS 1</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function hello() {
        alert("Selamat anda mendapat 1 Milyar!");
      }

      function tambah(){
        var bilangan1 = document.getElementById("bil1").value;
        var bilangan2 = document.getElementById("bil2").value;
        var hasil = Number.parseInt(bilangan1) + Number.parseInt(bilangan2);

        document.getElementById("hasil").innerHTML = hasil;
      }
    </script>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary" onclick="hello();">Klik Di sini</button>
      <p>
        Bilangan pertama:
        <input type="text" class="form-control" id="bil1" value="0" />
        <br />
        Bilangan kedua:
        <input type="text" class="form-control" id="bil2" value="0" />
        <br />
        Hasil Penjumlahan:
        <div id="hasil"></div>
        <br />
        <button class="btn btn-success" onclick="tambah();">Tambah</button>
      </p>
    </div>
  </body>
</html>
