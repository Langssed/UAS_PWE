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

        .pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .pagination .page-item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 16px;
            color: #666;
            background-color: #f5f5f5;
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
        }
        .pagination .page-item.active {
            background: linear-gradient(to right, #46074E, #197BD0);
            color: #fff;
            font-weight: bold;
        }
        .pagination .arrow {
            font-size: 20px;
            color: #666;
            cursor: pointer;
            transition: color 0.3s;
        }
        .pagination .arrow:hover {
            color: #197BD0;
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
                    <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
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
        <!-- Body 1 -->
        <div class="w-100 mt-5 position-relative" style="height: 450px;">
            <img src="{{ asset('images/artikelpage.jpg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
        
            <div class="position-absolute top-0 left-0 h-100" style="width: 50%; background: linear-gradient(to right, #46074E, transparent); opacity: 0.8; border-radius: 10px 0 0 10px;"></div>
        
            <div class="position-absolute text-white" style="left: 9%; top: 65%; width: 80%;">
                <h1 class="fs-4 mb-1">TIPS</h1>
                <h2 class="fs-5">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h2>
            </div>
        </div>        

        <!-- Body 2 -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <div class="container my-4">
                <div class="row g-3">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card border-0">
                            <img src="{{ asset('images/tupai.png') }}" alt="Image 1" class="card-img-top rounded" style="object-fit: cover; height: 250px;">
                            <div class="card-body p-2">
                                <p class="card-text text-center fw-bold">
                                    Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card border-0">
                            <img src="{{ asset('images/becak.png') }}" alt="Image 2" class="card-img-top rounded" style="object-fit: cover; height: 250px;">
                            <div class="card-body p-2">
                                <p class="card-text text-center fw-bold">
                                    Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-5">
            
            <div class="container my-5">
                <h1 class="mt-3 mb-5 fs-4">Mitra Kami</h1> 
                <div class="row">
                    <!-- artikel 1 -->
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/artikel1.jpg') }}" class="card-img" alt="Image 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                                        <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- artikel 2 -->
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/artikel2.jpg') }}" class="card-img" alt="Image 2">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                                        <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- artikel 3 -->
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/artikel3.jpg') }}" class="card-img" alt="Image 3">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                                        <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- artikel 4 -->
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/artikel4.jpg') }}" class="card-img" alt="Image 4">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                                        <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- artikel 5 -->
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/chinatown.png') }}" class="card-img" alt="Image 5">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                                        <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <span class="arrow">&larr;</span>
                <div class="page-item active">1</div>
                <div class="page-item">2</div>
                <div class="page-item">3</div>
                <div class="page-item">4</div>
                <div class="page-item">5</div>
                <span class="arrow">&rarr;</span>
            </div>
        </div>

        <hr>

        <!-- Body 3 -->
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