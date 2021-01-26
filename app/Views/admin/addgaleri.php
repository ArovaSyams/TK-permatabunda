<?= $this->extend('layout/admin/admintemp'); ?>

<?= $this->section('admin'); ?>

<h1>Tambah Foto Galeri</h1>
<hr>
<form action="/admin/savegaleri" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama-foto" class="form-label">Nama Foto</label>
        <input type="text" class="form-control <?= ($validation->hasError('nama-foto')) ? 'is-invalid' : ''; ?>" id="nama-foto" name="nama-foto" placeholder="Masukkan Nama Foto" value="<?= old('nama-foto'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('nama-foto'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" rows="3" placeholder="Masukkan Keterangan"><?= old('keterangan'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('keterangan'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto">
        <div class="invalid-feedback">
            <?= $validation->getError('foto'); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>