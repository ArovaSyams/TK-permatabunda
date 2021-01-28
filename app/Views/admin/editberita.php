<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Edit Berita Sekolah</h1>
<hr>
<form action="/adminberita/updateberita/<?= $berita['id']; ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="id" value="<?= $berita['id']; ?>">
    <input type="hidden" name="foto-lama" value="<?= $berita['foto']; ?>">
    <div class="mb-3">
        <label for="judul-berita" class="form-label">Judul Berita</label>
        <input type="text" class="form-control <?= ($validation->hasError('judul-berita')) ? 'is-invalid' : ''; ?>" id="judul-berita" name="judul-berita" placeholder="Masukkan Nama Foto" value="<?= (old('judul-berita')) ? old('judul-berita') : $berita['judul_berita']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul-berita'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="highlight" class="form-label">Highlight (untuk halaman depan berita)</label>
        <textarea class="form-control <?= ($validation->hasError('highlight')) ? 'is-invalid' : ''; ?>" id="highlight" name="highlight" rows="3" placeholder="Masukkan highlight (maximal 250 karakter)"><?= (old('highlight')) ? old('highlight') : $berita['highlight']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('highlight'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf1" class="form-label">Isi Paragraf 1</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf1" name="paragraf1" rows="3" placeholder="Masukkan paragraf 1 (Wajib Diisi)"><?= (old('paragraf1')) ? old('paragraf1') : $berita['paragraf_1']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf1'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf2" class="form-label">Paragraf 2</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf2" name="paragraf2" rows="3" placeholder="Masukkan paragraf 2 (Default)"><?= (old('paragraf2')) ? old('paragraf2') : $berita['paragraf_2']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf3" class="form-label">Paragraf 3</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf3" name="paragraf3" rows="3" placeholder="Masukkan paragraf 3 (Default)"><?= (old('paragraf3')) ? old('paragraf3') : $berita['paragraf_3']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf4" class="form-label">Paragraf 4</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf4" name="paragraf4" rows="3" placeholder="Masukkan paragraf 4 (Default)"><?= (old('paragraf4')) ? old('paragraf4') : $berita['paragraf_4']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="paragraf5" class="form-label">Paragraf 5</label>
        <textarea class="form-control <?= ($validation->hasError('paragraf')) ? 'is-invalid' : ''; ?>" id="paragraf5" name="paragraf5" rows="3" placeholder="Masukkan paragraf 5 (Default)"><?= (old('paragraf5')) ? old('paragraf5') : $berita['paragraf_5']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('paragraf'); ?>
        </div>
    </div>
    <div class="my-3">
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto" value="<?= $berita['foto']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('foto'); ?>
        </div>
        <div id="foto" class="form-text">Foto lama masih tersimpan disini</div>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>