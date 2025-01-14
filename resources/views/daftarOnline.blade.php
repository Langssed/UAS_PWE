<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, #46074E, #197BD0);
        }
        .form-container {
            max-width: 600px;
            margin: 100px auto 50px; /* Default jarak 100px untuk layar besar */
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-custom {
            background-color: #197BD0;
            color: #fff;
            border-radius: 20px;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #46074E;
        }

        /* Media Query untuk layar kecil */
        @media (max-width: 576px) {
            .form-container {
                margin: 100px 10px 20px; /* Jarak 50px dari atas untuk layar kecil */
                padding: 15px;
            }
            .btn-custom {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <main>
        <div class="container">
            <div class="form-container">
                <h1 class="text-center mb-4">Formulir Pendaftaran Online</h1>
                <form>
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <!-- Umur -->
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukkan umur" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex flex-wrap">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <!-- Pendidikan Terakhir -->
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-select" id="pendidikan" required>
                            <option value="" disabled selected>Pilih pendidikan terakhir</option>
                            <option value="SMA">SMA/SMK</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Magister">Magister</option>
                        </select>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Buat password" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom px-4">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>