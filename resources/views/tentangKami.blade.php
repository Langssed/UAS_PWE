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
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <main>
        <!-- Body 1 -->
        <div class="w-100 mt-5 position-relative" style="height: 450px;">
            <img src="{{ asset('images/dresden2.jpg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
            
            <!-- Gradient overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, #60186a, transparent); opacity: 0.8;"></div>
            
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">TENTANG KAMI</h1>
        </div>        

        <!-- Body 2 -->
        <div class="container py-5" style="max-width: 860px;">
            <!-- Bagian Profil -->
            <h1 class="mb-3 fs-4 text-muted">Profil</h1>
            <p class="text-muted fs-6">
                Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman,
                terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu
                di berbagai negara maju dunia.
            </p>
        
            <!-- Gambar Visi dan Misi -->
            <div class="row my-5">
                <div class="col-12 col-md-6 mb-4">
                    <img src="{{ asset('images/visi.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 mb-4 d-none d-md-block">
                    <img src="{{ asset('images/misi.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        
            <!-- Bagian Visi dan Misi -->
            <div class="row">
                <!-- Visi -->
                <div class="col-12 col-md-6 mb-2">
                    <h2 class="fs-4 text-muted">Visi</h2>
                    <p class="text-muted fs-6">
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                    </p>
                </div>
        
                <!-- Misi -->
                <div class="col-12 col-md-6 mb-2">
                    <h2 class="fs-4 text-muted">Misi</h2>
                    <p class="text-muted fs-6">
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                    </p>
                </div>
            </div>
        </div>        

        <!-- Button Layanan Kami -->
        <div class="d-flex justify-content-center my-5">
            <a href="#" class="btn bg-body-secondary border-dark rounded-5 fs-6">Layanan Kami</a>
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
    @include('components.footer')    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>