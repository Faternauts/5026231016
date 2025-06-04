<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      function hello() {
        alert("Selamat Anda mendapat 1 Miliyar");
      }
      function plus() {
        var numOne = document.getElementById("one").value;
        var numTwo = document.getElementById("two").value;
        var result = Number.parseInt(numOne) + Number.parseInt(numTwo);

        document.getElementById("result").innerHTML = result;
      }
      function validasi() {
        var nrp = document.getElementById("nrp").value;
        var nama = document.getElementById("nama").value;
        var len = nrp.length;
        if (len < 10) {
          swal(`Pesan! NRP anda masih ${len}, anda kurang ${10 - len} digit`);
          document.getElementById("nrp").focus();
          return false;
        }
        if (len > 10) {
          swal(
            `Pesan! NRP anda ${len} digit, anda kelebihan ${len - 10} digit`
          );
          document.getElementById("nrp").focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary" onclick="hello();">Klik klik</button>
      <pre>
        Bilangan Pertama
        <input type="text" class="form-control" id="one" value="0">
        Bilangan Kedua
        <input type="text" class="form-control" id="two" value="0">
        Hasil
        <div id="result">

        </div>
        <button class="btn btn-success" onclick="plus()">Tambah</button>
      </pre>
    </div>

    <div class="container">
      <pre>
        <form id="registeredForm" action="https://google.co.id" method="get" onsubmit="return validasi()">

                NRP :
                <input type="text" class="form-control" name="nrp" id="nrp">
                Nama :
            <input type="text" class="form-control" name="nama" id="nama">
            <input type="submit" class="btn btn-success" value="Daftar">
            </form>

        </pre>
    </div>
  </body>
</html>
