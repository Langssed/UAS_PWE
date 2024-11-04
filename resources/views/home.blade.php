<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Ubuntu';
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, #46074E, #197BD0);
        }
        .bg-gradient-custom-footer {
            background: linear-gradient(to right, #46074E, rgba(70, 7, 78, 0.8), #197BD0);
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .image-overlay {
            position: relative;
        }

        .image-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50%;
            background: linear-gradient(to right, #46074E, transparent);
            opacity: 0.8;
            border-radius: 10px 0 0 10px;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .overlay-content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            z-index: 1;
            text-align: left;
        }

        .line {
            width: 2px;
            height: 40px;
            background-color: white;
            margin-bottom: 5px;
        }

        .card-title {
            font-size: 1em;
            margin: 0;
            text-align: left;
        }

        .logo-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .logo-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .article-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .article-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .article-title {
            font-size: 16px;
            padding: 15px;
        }

        .btn-custom {
            margin-top: 20px;
            border: 1px solid #197BD0;
            color: #197BD0;
            border-radius: 20px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #197BD0;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar navbar-expand-lg navbar-dark bg-gradient-custom shadow-lg fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" class="d-inline-block align-text-top" height="50">
                <span class="ms-2 me-5 fs-4">Inaklug</span>
            </a>            

            <!-- Untuk mobile -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Route -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/tentang-kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#layanan-kami">Layanan Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#hubungi-kami">Hubungi Kami</a></li>
                </ul>
                <!-- Button Daftar -->
                <a href="#" class="btn rounded-5 ms-auto text-white " style="background: #2d5086">Daftar Online</a>
            </div>
        </div>
    </header>

    <main>
        {{-- body 1 --}}
        <div class="container-fluid mt-5 position-relative" style="height: 450px; padding: 0;">
            <img src="{{ asset('images/picgedung.png') }}" alt="" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;">
            
            <div class="position-absolute d-flex align-items-start bg-gradient-custom text-white p-3" style="left: 5%; top: 65%; width: 90%; max-width: 600px; border-radius: 8px;">
                            
                <div class="bg-white me-2" style="height: 30px; width: 1px;"></div>
                            
                <h1 class="fs-5 mb-0 flex-grow-1 ps-2 text-center text-md-start">
                    INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?
                </h1>
                <button class="d-flex align-items-center text-white btn btn-outline-light ms-1 px-3 py-1 mt-2 mt-md-0">
                    SELENGKAPNYA
                    <span class="ms-1">&#x25BC;</span>
                </button>
            </div>
        </div>

        {{-- body 2 --}}
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h1 class="mb-3 fs-4 text-center">Tentang Kami</h1>
            <p class="fs-6 text-center">
                Inaklug adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa indonesia yang ingin kuliah, perjalanan wisata dan berkarir dinegara maju didunia.
            </p>
        </div>
        
        <hr>

        {{-- body 3 --}}
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h1 class="mt-3 mb-5 fs-4 text-center">Layanan Kami</h1>    
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/bachelor.png') }}" class="card-img" alt="Studi S1 - Bachelor">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Studi S1 - Bachelor</h5>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/master.png') }}" class="card-img" alt="Studi S2 - Master">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Studi S2 - Master</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/phd.jpg') }}" class="card-img" alt="Studi S3 - Ph.D">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Studi S3 - Ph.D</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/kursus.png') }}" class="card-img" alt="Kursus Bahasa Asing">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Kursus Bahasa Asing</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/studytour.png') }}" class="card-img" alt="Study Tour">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Study Tour</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/ausbildung.jpg') }}" class="card-img" alt="Ausbildung">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Ausbildung</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Body 4 -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h1 class="mt-3 mb-3 fs-4 text-center">Mitra Kami</h1> 
            <div class="logo-container">
                <div class="logo-box">
                    <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('images/adrew.png') }}" alt="St. Andrew's College">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('images/studygroup.png') }}" alt="Study Group">
                </div>
            </div>            
        </div>

        {{-- body 5 --}}
        <div class="container py-5 text-muted" style="max-width: 700px;">
            <div class="d-flex flex-column flex-md-row align-items-center bg-gradient-custom text-white p-3" style="width: 100%; border-radius: 8px;">
                <!-- Teks dan tombol dalam satu baris atau kolom tergantung ukuran layar -->
                <div class="flex-grow-1 text-center text-md-start">
                    <h1 class="py-2 fs-5 mb-0 ps-md-2">INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?</h1>
                    <p class="pb-2 mb-0 ps-md-2">Konsultasi Seputar Kuliah/Bekerja di Luar Negeri</p>
                </div>
                
                <!-- Tombol di sebelah kanan atau bawah teks tergantung ukuran layar -->
                <button class="btn btn-outline-light text-white mt-2 mt-md-0 ms-md-3 px-3 py-1">
                    SELENGKAPNYA
                    <span class="ms-1">&#x25BC;</span>
                </button>
            </div>            
        </div>                                  

        {{-- body 6 --}}
        <div class="container py-5 text-muted" style="max-width: 700px;">
            <h1 class="mt-3 mb-5 fs-4 text-center">Artikel Terbaru</h1> 
            <div class="container text-center">
                <!-- Grid Artikel -->
                <div class="article-grid">
                    <!-- Artikel 1 -->
                    <div class="article-card">
                        <img src="{{ asset('images/studijerman.png') }}" alt="Artikel 1">
                        <div class="article-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</div>
                    </div>
                    
                    <!-- Artikel 2 -->
                    <div class="article-card">
                        <img src="{{ asset('images/korona.png') }}" alt="Artikel 2">
                        <div class="article-title">Uni Eropa Menghadapi Virus Korona</div>
                    </div>
                    
                    <!-- Artikel 3 -->
                    <div class="article-card">
                        <img src="{{ asset('images/bahasajerman.png') }}" alt="Artikel 3">
                        <div class="article-title">Belajar Bahasa Jerman Bersama Goethe Institut</div>
                    </div>
                    
                    <!-- Artikel 4 -->
                    <div class="article-card">
                        <img src="{{ asset('images/gatescambride.png') }}" alt="Artikel 4">
                        <div class="article-title">Apa Itu Gates Cambridge? Yuk Cari Tahu</div>
                    </div>
                </div>
                
                <button class="btn btn-custom mt-5">ARTIKEL LAINNYA</button>
            </div>
        </div>

        <hr>

        {{-- body 7 --}}
        <div class="text-center py-5 text-muted">
            <h1 class="h4 mb-4">Hubungi Kami</h1>
            <h2 class="h5">Kantor Pusat</h2>
            <p class="">MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT. BASEMENT.</p>
            <p class="">Phone: 085286754052</p>

            <!-- Buttons -->
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
                <a href="#" class="btn bg-gradient-custom-footer text-white rounded-5 fs-6">LOKASI KAMI</a>
                <a href="#" class="btn bg-body-secondary border-dark rounded-5 fs-6">KIRIM PESAN</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-custom-footer text-center text-white py-3">
        <p class="mb-0">Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>