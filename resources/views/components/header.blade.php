<header class="fixed-top" id="header">
    <nav class="navbar navbar-expand-xl navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('img') }}/Logo EPIM.png" alt="logo"
                    width="120"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#about">Tentang EPIM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#informasi">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#infoDaftar">Pendaftaran</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                            data-bs-toggle="dropdown">Pengumuman</a>
                        <div class="dropdown-menu">
                            <a href="/pengumuman-kategori-web" class="dropdown-item">Web Programming</a>
                            <a href="/pengumuman-kategori-design" class="dropdown-item">Design Packaging</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/data-expo">Data Expo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang
                            Kami</a>
                        <div class="dropdown-menu">
                            <a href="#gallery" class="dropdown-item">Gallery</a>
                            <a href="#medpart" class="dropdown-item">Media Partner</a>
                            <a href="#sponsor" class="dropdown-item">Sponsor</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="{{ route("Login.page") }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
