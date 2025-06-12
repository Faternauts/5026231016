<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Linktree Tugas PWEB</title>

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to bottom right, #1a1a1a, #2d0000);
      font-family: 'Inter', sans-serif;
      color: #fff;
      padding: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container-custom {
      background: #ef3b2d;
      padding: 2rem 1.5rem;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    h1 {
      font-weight: 600;
      font-size: 1.5rem;
      margin-bottom: 0.25rem;
      color: #fff;
    }

    h3 {
      font-weight: 400;
      color: #ffeaea;
      font-size: 0.9rem;
      margin-bottom: 1.75rem;
    }

    .task-link,
    .back-link {
      display: block;
      width: 100%;
      background-color: #1a1a1a;
      color: #fff;
      border: 1px solid #ef3b2d;
      padding: 0.65rem 1rem;
      border-radius: 10px;
      font-size: 0.95rem;
      font-weight: 500;
      text-decoration: none;
      margin-bottom: 0.85rem;
      transition: all 0.25s ease;
    }

    .task-link:hover,
    .back-link:hover {
      background-color: #ff6060;
      color: #fff;
      border-color: #ff6150;
      box-shadow: 0 0 10px #ef3b2d;
    }
<style>
  /* Tambahan dan revisi styling */

</style>

  </style>
</head>
<body>

  <div class="container-custom">
    <h1>Link Tugas PWEB</h1>
    <h3>Fathan Maulana Prasetya · 5026231016 · PWEB-C</h3>

    <a href="{{ url('pertama') }}" class="task-link" target="_blank">Tugas 1</a>
    <a href="{{ url('kedua') }}" class="task-link" target="_blank">Tugas 2</a>
    <a href="{{ url('ketiga') }}" class="task-link" target="_blank">Tugas 3</a>
    <a href="{{ url('keempat') }}" class="task-link" target="_blank">Tugas 4</a>
    <a href="{{ url('kelima') }}" class="task-link" target="_blank">Tugas 5</a>
    <a href="{{ url('keenam') }}" class="task-link" target="_blank">Tugas 6</a>
    <a href="{{ url('ketujuh') }}" class="task-link" target="_blank">Tugas 7</a>
    <a href="{{ url('kedelapan') }}" class="task-link" target="_blank">Tugas 8</a>
    <a href="https://faternauts.github.io/fathanmaulana.github.io/" class="task-link" target="_blank">Tugas ETS</a>

    <!-- Tombol Kembali -->
<a href="{{ url('/') }}" class="back-button">
  <span class="back-icon">⬅</span> Kembali
</a>

</body>
</html>
