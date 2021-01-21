<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="head"></div>
<div class="galeri-atas">
    <h2 class="judul-galeri">Galeri Sekolah</h2>
    <hr>
    <?php if (session()->has('admin')) : ?>
        <a href="" class="btn btn-success">Tambahkan</a>
    <?php endif; ?>
</div>
<div class="galeri">
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
    <div class="galeri-foto">
        <img src="/img/frozen2-bg.jpg" alt="">
    </div>
</div>

<?= $this->endSection(); ?>