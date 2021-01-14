<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-header">
    <div class="header1">
        <h1>TK PERMATA BUNDA BENGKULU</h1>
        <p>Taman Kanak-kanak Permata Bunda adalah TK yang berbasis islami dibawah naungan DWP (Dharma Wanita Persatuan) IAIN Bengkulu </p>
        <a href="#" class="btn btn-primary col-2">Daftar sekarang</a>
    </div>
</div>

<div class="main-1">
    <h2>KEGIATAN PEMBELAJARAN DI SEKOLAH</h2>
    <div class="cards-view">
        <div class="card" style="width: 18rem;">
            <i class="fas fa-book img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Kegiatan Formal Sekolah</h5>
                <p class="card-text">Sistem pembelajaran sesuai kurikulum</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="fas fa-mosque img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Pendidikan Islami</h5>
                <p class="card-text">Menjalankan kewajiban terhadap Tuhan YME.</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="fas fa-futbol img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Ekstrakulikuler</h5>
                <p class="card-text">Ekskul untuk meningkatkan bakat minat murid</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="far fa-lightbulb img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Program Unggulan</h5>
                <p class="card-text">Sebagai penunjang kualitas murid</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="main-2">
    <div class="foto">
        <img src="/img/ip man 4-bg.jpg" alt="">
    </div>
    <div class="tentang">
        <h2>Tentang Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab adipisci, id optio inventore veritatis architecto sed quia cupiditate. Inventore placeat quae esse quidem voluptas ipsa alias beatae mollitia expedita maiores.</p>
        <a href="">Selengkapnya</a>
    </div>
</div>
<?= $this->endSection(); ?>