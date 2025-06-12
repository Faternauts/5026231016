<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fathan Maulana Prasetya : 5026231016</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f8f9fa, #e3f2fd);
    }
.jumbotron {
  background: linear-gradient(135deg, #56ccf2, #2f80ed);
  color: white;
  height: 130px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  margin-bottom: 0; /* HILANGKAN JARAK DARI BAWAH */
}

    .jumbotron h1 {
      font-weight: 700;
      font-size: 1.8rem;
    }

.navbar {
  margin-top: 0; /* PASTIKAN NAVBAR NOL JARAK ATAS */
  background: white;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

    .navbar-nav .nav-link {
      color: #333;
      font-weight: 500;
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background: linear-gradient(135deg, #2f80ed, #56ccf2);
      color: white !important;
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
    }

    .container {
      margin-top: 20px;
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center mx-auto">
    <h1>5026231016 : Fathan Maulana Prasetya</h1>
  </div>

  <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="/frontend" target="_blank"><i class="fas fa-code"></i> All Front End</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pegawai"><i class="fas fa-user-tie"></i> Pegawai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pensil"><i class="fas fa-edit"></i> Tugas CRUD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-laptop-code"></i> EAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kodeX2"><i class="fas fa-cogs"></i> Latihan 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-layer-group"></i> Latihan 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-puzzle-piece"></i> Latihan 3</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    @yield('content')
  </div>

</body>

</html>
