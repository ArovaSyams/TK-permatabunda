<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Inti</div>
                    <a class="nav-link" href="/admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Halaman Website</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Halaman
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/">Beranda</a>
                            <a class="nav-link" href="/profil">Profil</a>
                            <a class="nav-link" href="/pendidikan">Pendidikan</a>
                            <a class="nav-link" href="/galeri">Galeri</a>
                            <a class="nav-link" href="/berita">Berita</a>
                            <a class="nav-link" href="/hubungi">Hubungi</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri" aria-expanded="false" aria-controls="collapseGaleri">
                        <div class="sb-nav-link-icon"><i class="bi bi-images"></i></div>
                        Galeri Sekolah
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseGaleri" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/admin/addgaleri">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Tambah
                            </a>
                            <a class="nav-link" href="/admin/galeri">Galeri</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBerita" aria-expanded="false" aria-controls="collapseBerita">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Berita Sekolah
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBerita" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/admin/addberita">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Tambah
                            </a>
                            <a class="nav-link" href="/admin/berita">Berita</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="/admin/contactus">
                        <div class="sb-nav-link-icon"><i class="bi bi-envelope-fill media"></i></div>
                        Contact Us
                    </a>

                    <div class="sb-sidenav-menu-heading">PPDB</div>
                    <a class="nav-link" href="/admin/ppdb">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Siswa Baru
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Masuk Sebagai :</div>
                <?= session()->get('admin'); ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">