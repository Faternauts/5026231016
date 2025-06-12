<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JS 2</title>
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

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      function validasi() {
        var nrp = document.getElementById("nrp").value;
        var nama = document.getElementById("nama").value;

        if (nrp.length == 0){
            // alert("NRP harus diisi!");
            swal("Perhatian!", "NRP harus diisi", "error");
            document.getElementById("nrp").focus();
            return false;
        }

        if (nrp.length != 10){
            swal("Perhatian!", "NRP harus 10 digit", "error");
            document.getElementById("nrp").focus();
            return false;
        }

        if (nama.length == 0){
            // alert("Nama harus diisi!");
            swal("Perhatian!", "Nama harus diisi", "error");
            document.getElementById("nama").focus();
            return false;
        }
        //default return value dari validasi() adalah TRUE
      }
    </script>
  </head>
  <body>
    <div class="container">
      <p>
        <form action="https://google.co.id" id="frmDaftar" method="get"  onsubmit="return validasi();">
            NRP:
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP! Harus diisi!"/>
            <br />
            Nama:
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama! Harus diisi!"/>
            <br />
            <input type="submit" class="btn btn-success" value="Daftar">
        </form>
      </p>
    </div>
  </body>
</html>
