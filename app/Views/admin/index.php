<?= $this->extend('layout/admin/admintemp'); ?>

<?= $this->section('admin'); ?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin">Administrator</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav  d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
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
                    <a class="nav-link" href="/admin/galeri">
                        <div class="sb-nav-link-icon"><i class="bi bi-images"></i></div>
                        Tambah Galeri
                    </a>
                    <a class="nav-link" href="/admin/berita">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Tambah Berita
                    </a>

                    <div class="sb-sidenav-menu-heading">PPDB</div>
                    <a class="nav-link" href="tables.html">
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
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard Admin</h1>
                <hr>
                <?= session()->getFlashdata('pesan'); ?>
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Tambahkan Gambar</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/admin/galeri">Tambah</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Tambahkan Berita</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/admin/berita">Tambah</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Peserta Didik Baru
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; 2020 Taman Kanak-kanak Permata Bunda Bengkulu | Stackware comp. | All Right Reserved</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<?= $this->endSection(); ?>