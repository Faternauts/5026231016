<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hizkia Belajar Web</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (tambahkan sebelum </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="css/summary.css">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    {{-- ICON --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    {{-- Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- Javascript --}}
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

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top px-4 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hizkia Crisantino</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-custom">
                    <a class="nav-link active" aria-current="page" href="#">Article</a>
                    <a class="nav-link" href="#shop">Shop</a>
                    <a class="nav-link" href="#linktree">linktree</a>
                    <a class="nav-link" href="#form">Form</a>
                </div>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>


    {{-- Article --}}
    <div class="container my-5" id="Article">
        <p>
            <a href="https://www.its.ac.id" class="text-reset text-decoration-none">Web ITS</a> |
            <a href="https://google.co.id" class="text-reset text-decoration-none" target="_blank">Google</a> |
            <a href="https://kompas.tv" class="text-reset text-decoration-none" target="_self">Kompas TV</a> |
            <a href="#" class="text-reset text-decoration-none">Di halaman ini</a>
        </p>

        <h2>Bantu Adaptasi Mahasiswa Baru, ITS Gelar Mentoring Agama Islam</h2>

        <h6>Oleh : itsash <i>|</i> 18 <i>|</i> Source : ITS Online</h6>
        <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2025/02/IMG_20250223_084851-1536x864.jpg"
            class="w-100" />

        <p class="kalimatpembuka">
            Kampus ITS, ITS News — Institut Teknologi Sepuluh Nopember (ITS) kembali
            menggelar Mentoring Agama Islam Semester Genap 2024/2025 dengan berbagai
            rangkaian kegiatan. Kegiatan ini bertujuan membentuk karakter mahasiswa
            baru (maba) muslim berbasis nilai-nilai Islam. Acara yang resmi dibuka
            dalam kuliah umum ini berlangsung di Masjid Manarul Ilmi ITS, Sabtu
            (22/02).
        </p>

        <p>
            Dalam pembukaan acara, Ketua Tim Pembina Kerohanian Islam (TPKI) ITS Prof
            Dr Muhammad Mashuri MT menyampaikan bahwa mentoring merupakan sarana
            pencarian ilmu bagi mahasiswa. “Kegiatan mentoring ini untuk mempersiapkan
            generasi emas di 2045 yang perlu dibekali dengan segudang ilmu, termasuk
            keilmuan Islam,” ujarnya.
        </p>

        <p>
            Lebih lanjut, dosen yang akrab disapa Mashuri ini menjelaskan, kegiatan
            mentoring ini terdiri dari beberapa rangkaian acara. Adapun diawali dengan
            dengan kuliah umum yang menghadirkan empat materi utama dari dosen-dosen
            agama Islam ITS sebagai pondasi awal. Setelah mendapatkan pemahaman dasar,
            mahasiswa mengikuti kelas pendalaman dalam enam sesi yang mencakup diskusi
            dan ujian untuk menguji pemahaman mereka.
        </p>
        <img src="img/pakadi.jpg" class="w-100 py-3" alt="Dosen agama islam ITS" />
        <p>Dosen agama islam ITS Prof Dr Ir Adi Soeprijanto MT saat memberikan materi sirah nabawi pada Kuliah Umum
            Mentoring Agama Islam Semester Genap 2024/2025</p>
        <p>Tak berhenti di situ, kegiatan ini kemudian diperkuat melalui kegiatan Ramadhan di Kampus (RDK) 46. Pada
            kegiatan ini, maba mengikuti kajian inspiratif, kajian rutin Subuh, dan Tarawih selama bulan Ramadhan guna
            memperdalam pemahaman keislaman secara aplikatif. “Melalui mentoring ini, mahasiswa mampu mengamalkannya
            ilmu keislaman dalam kehidupan sehari-hari,” tambah Dosen Statistika ITS tersebut. </p>
        <p>Selaras dengan Mashuri, Ketua Pelaksana Mentoring Agama Islam Semester Genap 2024/2025 Fathan Hidayatulloh
            menjelaskan bahwa format mentoring terus berkembang. Perubahan kurikulum menyebabkan mata kuliah Agama Islam
            dialihkan ke semester atas. Maka, peran mentoring bagi maba menjadi garda utama dalam memberikan arahan agar
            siap menghadapi perkuliahan.</p>
        <p>Fathan menyoroti bahwa kurikulum mentoring kini lebih berfokus pada tiga materi utama yaitu Tauhid, Ibadah,
            dan Akhlak. Disertai dengan pendekatan yang lebih relevan terhadap kehidupan mahasiswa, ketiga materi
            tersebut juga berisi isu akademik, hubungan mahasiswa dengan dosen, hingga tantangan sosial di era digital.
            “Materi tersebut didukung dengan pemberian penugasan kepada peserta guna mencapai tujuan kegiatan,”
            ungkapnya.</p>
        <img src="img/mahasiswa.jpg" class="w-100 py-3" alt="Kegiatan Mahasiswa">
        <p>Menilik terlaksananya mentoring, ia berharap program ini bisa terus berkembang dan lebih terstruktur ke
            depannya. Mentoring ini bukan sekadar formalitas, tetapi wadah untuk memperbaiki diri dan menjadi pribadi
            muslim yang lebih baik. Mahasiwa yang tidak hanya cerdas secara intelektual, tetapi juga memiliki pondasi
            moral dan spiritual yang kuat.</p>
        <p>Dengan adanya program mentoring ini, ITS berharap dapat mencetak generasi muda tidak hanya unggul secara
            akademik tetapi juga memiliki karakter yang kuat dan berlandaskan nilai-nilai Islam. “Pastinya untuk dapat
            menghadapi tantangan yang lebih besar di masa depan,” tutup Fathan optimis. (*)</p>

        <h6>Reporter: Lathifah Sahda</h6>
        <h6 class>Redaktur: Rayinda Santriana</h6>
    </div>

    {{-- Transisi --}}
    {{-- Shop --}}
    <div id="shop" class="mt-5 pb-3" style="background-color: var(--primary)">
        <header class="container-fluid px-0">
            <div
                class="equipment-title d-flex align-items-center py-0 px-3 mb-0 bg-secondary-subtle border-top border-3 border-dark">
                <img class="border" src="{{ asset('img/Logo CekDong 1.png') }}" alt="Logo Cekdong"
                    style="width: 90px" />
                <h3>Equipment</h3>
            </div>
            <p class="equipment-description p-3">
                All list of goods, please tap the goods for start booking
            </p>
        </header>

        <div class="container mt-3" id="shop-gallery">
            <!-- Row 1 -->
            <div class="row g-0">
                <!-- Item 1 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: visible">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Lighting Set Sonny</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon Lens EFS 18-135mm</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: visible">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon EOS 4000</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row g-0">
                <!-- Item 1 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: visible">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Lighting Set Sonny</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon Lens EFS 18-135mm</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon EOS 4000</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3 -->

            <div class="row g-0">
                <!-- Item 1 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Lighting Set Sonny</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon Lens EFS 18-135mm</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon EOS 4000</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row g-0">
                <!-- Item 1 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Lighting Set Sonny</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: visible">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Canon Lens EFS 18-135mm</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-3">
                    <div class="item-box">
                        <span class="mostly-borrowed" style="visibility: hidden">Mostly Borrowed</span>
                        <div class="content-box">
                            <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                            <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                            <div class="availability">
                                <span></span>
                                <p class="m-0">Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-container">
            <button class="btn-custom">Book Now!</button>
        </div>
    </div>

    {{-- linktree --}}
    <div class="container-fluid d-flex flex-column align-items-center text-center py-4" id="linktree">
        <header class="my-4">
            <img src="lnktr-img/wuling-logo.webp" class="logo rounded-circle mb-3" alt="Logo Wuling" />
            <h4 class="fw-bold text-white">@atmajamgm.wuling</h4>
        </header>

        <nav>
            <ul class="nav nav-pills d-flex justify-content-center fw-bold" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-links-tab" data-bs-toggle="tab"
                        data-bs-target="#pills-links" type="button" role="tab" aria-controls="pills-links"
                        aria-selected="true">
                        Links
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-shop-tab" data-bs-toggle="tab" data-bs-target="#pills-shop"
                        type="button" role="tab" aria-controls="pills-shop" aria-selected="false">
                        Shop
                    </button>
                </li>
            </ul>
        </nav>

        <main class="tab-content w-100 text-center mt-4" id="pills-tabContent">
            <section class="tab-pane fade show active" id="pills-links" role="tabpanel"
                aria-labelledby="pills-links-tab">
                <div class="container-content">
                    <a href="#pills-shop" id="toShopTab">
                        <div class="container-links">
                            <div class="row p-3">
                                <div class="col-4 p-1">
                                    <img src="lnktr-img/1.webp" alt="" class="img-fluid rounded-4" />
                                </div>
                                <div class="col-4 p-1">
                                    <img src="lnktr-img/2.webp" alt="" class="img-fluid rounded-4" />
                                </div>
                                <div class="col-4 p-1">
                                    <img src="lnktr-img/3.webp" alt="" class="img-fluid rounded-4" />
                                </div>
                            </div>

                            <p class="fw-bold mb-0">See full shop</p>
                            <p class="fw-light small">22 Products</p>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/atmaja.mgm/profilecard/?igsh=MWVqc2kyejl0OTZl"
                        class="text-white text-decoration-none fw-bold d-block">
                        <div class="container-links">
                            Instagram
                            <button aria-label="Share link"
                                class="position-absolute top-50 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                <i class="bi bi-three-dots-vertical fs-6"></i>
                            </button>
                        </div>
                    </a>

                    <a href="https://api.whatsapp.com/send/?phone=6285803733100&text&type=phone_number&app_absent=0"
                        class="text-white text-decoration-none fw-bold">
                        <div class="container-links">
                            Share on Whatsapp
                            <button aria-label="Share link"
                                class="position-absolute top-50 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                <i class="bi bi-three-dots-vertical fs-6"></i>
                            </button>
                        </div>
                    </a>
                </div>
            </section>

            <section class="tab-pane fade" id="pills-shop" role="tabpanel" aria-labelledby="pills-shop-tab">
                <div class="container-content">
                    <form class="container">
                        <div
                            class="container d-flex align-items-center justify-content-evenly bg-white border border-4 rounded-5">
                            <!-- Ikon Kaca Pembesar -->
                            <i class="bi bi-search text-secondary fs-6"></i>

                            <!-- Input Pencarian -->
                            <input type="text" class="bg-transparent px-3 py-3 border-0 focus w-100"
                                placeholder="Search atmajamgm.wuling's products" value="" />
                        </div>
                    </form>

                    <main class="container mt-4">
                        <div class="row">
                            <!--Cell 1-->
                            <a href="https://www.whatsapp.com/product/8861722100605446/6285803733100/?app_absent=0"
                                class="col d-block container-shop position-relative" target="_blank">
                                <img src="lnktr-img/1.webp" alt="mobil-1" class="img-shop" />
                                <p class="mt-4">
                                    ANGSURAN 160.000 / hari from Atmaja - MGM on WhatsApp.
                                </p>
                                <button aria-label="Share link"
                                    class="position-absolute bottom-0 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                    <i class="bi bi-three-dots-vertical fs-6"></i>
                                </button>
                            </a>

                            <!--Cell 2-->
                            <a href="https://www.whatsapp.com/product/8936875593074550/6285803733100/?app_absent=0"
                                class="col d-block container-shop position-relative" target="_blank">
                                <img src="lnktr-img/2.webp" alt="mobil-2" class="img-shop" />
                                <p class="mt-4">
                                    Pajak Mobil 150rb-an per Tahun from Atmaja - MGM on
                                    WhatsApp.
                                </p>
                                <button aria-label="Share link"
                                    class="position-absolute bottom-0 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                    <i class="bi bi-three-dots-vertical fs-6"></i>
                                </button>
                            </a>
                        </div>

                        <div class="row">
                            <!--Cell 3-->
                            <a href="https://www.whatsapp.com/product/29471958202403457/6285803733100/?app_absent=0"
                                class="col d-block container-shop position-relative" target="_blank">
                                <img src="lnktr-img/3.webp" alt="mobil-3" class="img-shop" />
                                <p class="mt-4">
                                    AIR EV LITE RANGE 300 KM from Atmaja - MGM on WhatsApp.
                                </p>
                                <button aria-label="Share link"
                                    class="position-absolute bottom-0 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                    <i class="bi bi-three-dots-vertical fs-6"></i>
                                </button>
                            </a>

                            <!--Cell 4-->
                            <a href="https://www.whatsapp.com/product/9259257590817055/6285803733100/?app_absent=0"
                                class="col d-block container-shop position-relative" target="_blank">
                                <img src="lnktr-img/4.jpeg" alt="mobil-4" class="img-shop" />
                                <p class="mt-4">
                                    AIR EV LITE Range 300 Km from Atmaja - MGM on WhatsApp.
                                </p>
                                <button aria-label="Share link"
                                    class="position-absolute bottom-0 end-0 translate-middle-y flex h-6 w-6 items-center justify-center rounded-full bg-transparent border-0">
                                    <i class="bi bi-three-dots-vertical fs-6"></i>
                                </button>
                            </a>
                        </div>
                    </main>
                </div>
            </section>
        </main>

        <a href="#" class="container-join">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" height="16px">
                <title>Linktree Logo</title>
                <desc>Linktree Logo Symbol</desc>
                <path
                    d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z"
                    fill="#000000"></path>
            </svg>
            <p class="fw-bold my-0">Join atmajamgm.wuling on Linktree</p>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toShopTab = document.getElementById("toShopTab");
        toShopTab.addEventListener("click", function(e) {
            e.preventDefault();
            const shopTab = new bootstrap.Tab(
                document.getElementById("pills-shop-tab")
            );
            shopTab.show();
        });
    </script>
    <script src="{{ asset('js/tabs.js') }}"></script>

    {{-- Form --}}
    <div class="container-fluid px-5" id="form">
        <div class="row">
            {{-- Form 1 --}}
            <div class="col-6 my-3">
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
            {{-- Form 2 --}}
            <div class="col-6 my-3">
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
        </div>
    </div>

</body>

</html>
