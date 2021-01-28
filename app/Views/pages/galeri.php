<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="head"></div>
<div class="galeri-atas">
    <h1 class="judul-galeri">Galeri Sekolah</h1>
    <hr>
</div>
<div class="galeri">
    <?php foreach ($layout as $l) : ?>
        <div class="galeri-foto">
            <button id="foto" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-namafoto="<?= $l['nama_foto']; ?>" data-bs-foto="/img/galeri/<?= $l['foto']; ?>" data-bs-keterangan="<?= $l['keterangan']; ?>" data-bs-created="<?= $l['created_at']; ?>">
                <img src="/img/galeri/<?= $l['foto']; ?>" class="img-photo">
            </button>
        </div>
    <?php endforeach; ?>
</div>
<?= $pager->links('galeri', 'galeri_pagination'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-galeri">
                <img src="" class="img-modal">
                <p class="keterangan-modal"></p>
                <p>dibuat pada : <span class="created-modal"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>