<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h2>Detail Foto</h2>
<hr>
<a href="/admin/ppdb" class="btn btn-success" style="margin-bottom: 10px;">Kembali</a>
<div class="table-responsive">
    <table class="table table-bordered ppdb-detail" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-light">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Foto Soft</th>
                <th>Akta Kelahiran</th>
                <th>KTP Orang tua</th>
                <th>Kartu Keluarga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lorem, ipsum dolor.</td>
                <td><img src="/img/PPDB/foto/foto-ex.JPG" class="akta"></td>
                <td><img src="/img/PPDB/akta-kelahiran/akta-ex.png" class="akta"></td>
                <td><img src="/img/PPDB/KTP/KTP-ex.JPG" class="ktp"></td>
                <td><img src="/img/PPDB/kartu-keluarga/kk-ex.jpg" class="ktp"></td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>