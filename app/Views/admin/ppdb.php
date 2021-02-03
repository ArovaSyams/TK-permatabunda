<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Peserta Didik Baru</h1>
<hr>
<div class="alert alert-danger" role="alert">
  Fungsi PPDB ini masih dalam proses pengembangan, mohon untuk menghubungi developer untuk informasi lebih lanjut
</div>
<div class="text-muted">Tutup side navbar untuk tampilan yang lebih baik</div><br>
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
                <td>Lorem ipsum dolor.</td>
                <td>Lorem</td>
                <td>Lorem, 17 xxxxxxxx 2004</td>
                <td>Loremipsum</td>
                <td>Lorem ipsum</td>
                <td>Lorem</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nisi!</td>
                <td class="btn-ppdb"><a href="/admin/ppdbdetail" class="btn btn-info"><i class="far fa-eye"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>