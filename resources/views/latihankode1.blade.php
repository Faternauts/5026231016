<html>
<head>
    <title>Layout Kode Soal 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap & dependencies -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-bottom: 80px; /* spacing for footer */
        }

        .card, .footer p {
            font-size: 13px;
            margin-bottom: 4px;
        }

        .card p:first-child {
            font-weight: bold;
            font-size: 16px;
        }

        .btn-outline-secondary:hover {
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm fixed-top shadow-sm bg-white">
            <div class="d-flex align-items-center w-100">
                <button type="button" class="btn btn-outline-secondary">
                    <img src="images/back.png" width="20" alt="Back">
                </button>
                <span class="ml-auto font-we">
                    <span class="text-muted font-weight-bold">CekDong!</span>  
                    <span class="font-weight-bold">Booking Alat</span>
                </span>
            </div>
        </nav>

        <!-- Card Section -->
        <div class="mt-5 pt-4 mb-4">
            <div class="card p-3 shadow-sm bg-light">
                <div class="row align-items-center">
                    <div class="col-5 text-center">
                        <img src="images/camera.png" width="120" alt="Camera">
                        <div class="btn-group mt-2">
                            <button type="button" class="btn btn-outline-secondary btn-sm">-</button>
                            <input type="text" class="form-control form-control-sm text-center" value="1" style="width: 40px;" readonly>
                            <button type="button" class="btn btn-outline-secondary btn-sm">+</button>
                        </div>
                    </div>
                    <div class="col-7">
                        <p class="font-weight-bold mb-1">CAMERA CANON EOS 4000D</p>
                        <p class="mb-1">Disewakan pada tanggal 20/11/24 <i class="fas fa-calendar-alt"></i></p>
                        <p class="mb-1">E17_YANUAR - CREW ITS TV</p>
                        <p class="mb-1">07.00 - 19.00</p>
                        <p class="mb-0">Liputan: <strong>Pengukuhan Proffesor</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="fixed-bottom bg-light border-top py-2">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="footer">
                    <p class="text-secondary">Teknisi hari ini</p>
                    <p class="font-weight-bold mb-3">E17_AJI - TEKNISI ITS TV</p>
                </div>
                <button class="btn btn-primary">KONFIRMASI TEKNISI</button>
            </div>
        </footer>
    </div>
</body>
</html>
