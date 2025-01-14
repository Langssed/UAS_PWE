<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=your-site-key"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, #46074E, #197BD0);
        }
        .bg-gradient-custom-footer {
            background: linear-gradient(to right, #46074E, rgba(70, 7, 78, 0.8), #197BD0);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #197BD0;
        }
        .hero-image {
            height: 400px;
        }
        .hero-text {
            font-size: 2rem;
        }
        @media (max-width: 576px) {
            .hero-image {
                height: 250px;
            }
            .hero-text {
                font-size: 1.5rem;
            }
            .form-control {
                font-size: 0.9rem;
            }
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <main>
        <!-- Hero Section -->
        <div class="position-relative mt-5">
            <img src="{{ asset('images/hubungi.jpg') }}" alt="" class="w-100 img-fluid hero-image" style="object-fit: cover;">
            
            <!-- Gradient overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, #60186a, transparent); opacity: 0.8;"></div>
            
            <h1 class="position-absolute text-white hero-text" style="left: 9%; bottom: 10%;">Hubungi Kami</h1>
        </div>        

        <!-- Form Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="mb-5 fw-bold fs-4 text-center">KIRIM PESAN</h2>
            <form id="hubungiKamiForm" class="row g-4">
                @csrf
                <div class="col-sm-6">
                    <label for="nama" class="form-label fw-bold">Nama*</label>
                    <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
                </div>
                <div class="col-sm-6">
                    <label for="email" class="form-label fw-bold">E-Mail*</label>
                    <input type="email" class="form-control border-0 border-bottom" id="email" name="email" placeholder="Alamat Email Anda" required>
                </div>
                <div class="col-sm-6">
                    <label for="perusahaan" class="form-label fw-bold">Perusahaan / Organisasi</label>
                    <input type="text" class="form-control border-0 border-bottom" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan / organisasi">
                </div>
                <div class="col-sm-6">
                    <label for="telepon" class="form-label fw-bold">Telepon</label>
                    <input type="tel" class="form-control border-0 border-bottom" id="telepon" name="telepon" placeholder="Nomor telepon Anda">
                </div>
                <div class="col-12">
                    <label for="pesan" class="form-label fw-bold">Isi Pesan*</label>
                    <textarea class="form-control border-0 border-bottom" id="pesan" name="pesan" rows="5" placeholder="Isi pesan Anda ..." required></textarea>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center gap-3">
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LcnabEqAAAAAHZ9sRR3-r4-hTyg1jPbMTR4guY-"></div>
                    <button type="submit" class="btn btn-outline-primary px-4 py-2 rounded-pill">KIRIM PESAN</button>
                </div>                               
            </form>
        </div>

        <!-- Lokasi Kami Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="fw-bold mb-5 text-center fs-4">LOKASI KAMI</h2>
            <div>
                <div class="col-md-6">
                    <h4 class="fw-bold fs-5">KANTOR PUSAT</h4>
                    <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                    <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                    <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
                </div>
                <br>
                <div class="col-md-6">
                    <h4 class="fw-bold fs-5">KANTOR CABANG</h4>
                    <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                    <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                    <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('components.footer')    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Ajax -->
    <script>
        $(document).ready(function() {
            $('#hubungiKamiForm').on('submit', function(e) {
                e.preventDefault();
                const formData = $(this).serialize();

                $.ajax({
                    url: '/hubungi-kami', // Sesuaikan URL dengan rute Laravel Anda
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Pesan berhasil dikirim!');
                        window.location.href = '/'; // Redirect ke halaman home
                    },
                    error: function() {
                        alert('Terjadi kesalahan. Coba lagi nanti.');
                    }
                });
            });
        });
    </script>
</body>
</html>