<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bootstrap 2 (Warna & Ukuran)</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron bg-primary text-white">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML</p>
      </div>

      <div class="row">
        <div class="col bg-danger text-white" style="height: 120px;">Kolom 1</div>
        <div class="col bg-info text-white" style="height: 120px;">
          <div class="row">
            <div class="col-8 bg-success text-white" style="height: 60px;">Kolom 2.1</div>
            <div class="col-4 bg-warning text-dark" style="height: 60px;">Kolom 2.2</div>
          </div>
        </div>
        <div class="col bg-dark text-white" style="height: 120px;">Kolom 3</div>
      </div>
    </div>
  </body>
</html>
