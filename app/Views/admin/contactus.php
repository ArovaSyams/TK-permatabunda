<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Daftar Kontak Pertanyaan</h1>
<hr>
<?= session()->getFlashdata('pesan'); ?>
<form action="" method="post">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Cari Berdasarkan</label>
        <div class="col-sm-10">
            <select class="form-select col-sm-2 mr-3" style="float: left;" name="email-hp">
                <option selected value="">--Email / HP--</option>
                <option value="@">Email</option>
                <option value="08">No. Handphone</option>
            </select>
            <select class="form-select col-sm-2 mr-3" name="role" style="float: left;">
                <option selected value="">--Peran--</option>
                <option value="Wali calon peserta didik baru">Wali calon peserta didik baru</option>
                <option value="Orang tua murid">Orang tua Murid</option>
                <option value="Pengunjung">Pengunjung</option>
            </select>
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            <a href="/admin/contactus" class="btn btn-success" style="float:right;"><i class="fas fa-redo-alt"></i></a>
        </div>
    </div>
</form>
<div class="table-responsive">
    <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-light">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email / No. Handphone</th>
                <th>Peran</th>
                <th>Pesan</th>
                <th>waktu</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($contact as $c) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $c['nama']; ?></td>
                    <td><?= $c['email-hp']; ?></td>
                    <td><?= $c['role']; ?></td>
                    <td><?= $c['pesan']; ?></td>
                    <td><?= $c['created_at']; ?></td>
                    <td style="text-align: center;">
                        <form action="/admin/deletecontact/<?= $c['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Semua informasi dari data ini akan dihapus secara permanen dan tidak dapat dikembalikan lagi, Apakah anda yakin?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $pager->links('contact-us', 'galeri_pagination'); ?>

<?= $this->endSection(); ?>