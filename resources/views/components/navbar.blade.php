<header class="navbar navbar-expand-lg navbar-dark bg-gradient-custom shadow-lg fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white d-flex align-items-center" href="/">
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
                <li class="nav-item"><a class="nav-link text-white" href="/layanan-kami">Layanan Kami</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/artikel">Artikel</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/hubungi-kami">Hubungi Kami</a></li>
            </ul>
            <!-- Button Daftar -->
            <a href="daftar-online" class="btn rounded-5 ms-auto text-white " style="background: #2d5086">Daftar Online</a>
        </div>
    </div>
</header>