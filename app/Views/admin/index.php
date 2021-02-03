<?= $this->extend('layout/admin/admintemp'); ?>

<?= $this->section('admin'); ?>


<h1 class="mt-4">Dashboard Admin</h1>
<hr>
<?= session()->getFlashdata('pesan'); ?>
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Tambahkan Gambar</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/admin/addgaleri">Tambah</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Tambahkan Berita</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/admin/addberita">Tambah</a>
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
            <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-light">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nama Panggilan</th>
                        <th>TTL</th>
                        <th>Ibu</th>
                        <th>Ayah</th>
                        <th>Pekerjaan Ortu</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wifqo Arova Syams</td>
                        <td>Rava</td>
                        <td>Bengkulu, 17 Agustus 2004</td>
                        <td>asdasdasd</td>
                        <td>asdasd asdasd</td>
                        <td>Dosen</td>
                        <td>Jl. hibrida 8 no 13a kel sidomulyo kec gading cempaka kota bengkulu, bengkulu</td>
                        <td><a href="/admin/ppdbdetail" class="btn btn-primary">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>