<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Tambah Berita Sekolah</h1>
<hr>
<form action="/adminberita/saveberita" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="judul-berita" class="form-label">Judul Berita</label>
        <input type="text" class="form-control <?= ($validation->hasError('judul-berita')) ? 'is-invalid' : ''; ?>" id="judul-berita" name="judul-berita" placeholder="Masukkan Nama Foto" value="<?= old('judul-berita'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul-berita'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="highlight" class="form-label">Highlight (untuk halaman depan berita)</label>
        <textarea class="form-control <?= ($validation->hasError('highlight')) ? 'is-invalid' : ''; ?>" id="highlight" name="highlight" rows="3" placeholder="Masukkan highlight (maximal 250 karakter)"><?= old('highlight'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('highlight'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf1" class="form-label">Isi Paragraf 1</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf1')) ? 'is-invalid' : ''; ?>" id="paragraf1" name="paragraf1" rows="3" placeholder="Masukkan paragraf 1 (Wajib Diisi)"><?= old('paragraf1'); ?></textarea>
        <a href="/panduan">panduan?</a>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf1'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf2" class="form-label">Paragraf 2</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf2" name="paragraf2" rows="3" placeholder="Masukkan paragraf 2 (Opsional)"><?= old('paragraf2'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf3" class="form-label">Paragraf 3</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf3" name="paragraf3" rows="3" placeholder="Masukkan paragraf 3 (Opsional)"><?= old('paragraf3'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf4" class="form-label">Paragraf 4</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf4" name="paragraf4" rows="3" placeholder="Masukkan paragraf 4 (Opsional)"><?= old('paragraf4'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf5" class="form-label">Paragraf 5</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf5" name="paragraf5" rows="3" placeholder="Masukkan paragraf 5 (Opsional)"><?= old('paragraf5'); ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="my-3">
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto">
        <div class="invalid-feedback">
            <?= $validation->getError('foto'); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>