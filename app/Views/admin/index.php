<?= $this->extend('layout/admin/admintemp'); ?>

<?= $this->section('admin'); ?>

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

<?= $this->endSection(); ?>