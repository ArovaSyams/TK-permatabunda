<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= session()->getFlashdata('pesan'); ?>

<div class="header1">
    <img src="/img/frozen2-bg.jpg" class="img-fluid" alt="">
    <h1 data-aos="fade-down" data-aos-duration="1500">TK PERMATA BUNDA BENGKULU</h1>
    <p>Taman Kanak-kanak Permata Bunda adalah TK yang berbasis islami dibawah naungan<br> DWP (Dharma Wanita Persatuan) IAIN Bengkulu </p>
    <a data-aos="fade-up" data-aos-duration="1500" href="#" class="btn btn-primary col-2">Daftar sekarang</a>
</div>

<div class="main-1">
    <h2>KEGIATAN PEMBELAJARAN DI SEKOLAH</h2>
    <div class="cards-view">
        <div data-aos="fade-down" data-aos-duration="1500" class="card" style="width: 18rem;">
            <i class="fas fa-book img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Kegiatan Formal Sekolah</h5>
                <p class="card-text">Sistem pembelajaran sesuai kurikulum</p>
                <a href="/pendidikan" class="btn btn-success">Selengkapnya</a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="card" style="width: 18rem;">
            <i class="fas fa-mosque img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Pendidikan Islami</h5>
                <p class="card-text">Menjalankan kewajiban terhadap Tuhan YME.</p>
                <a href="/pendidikan" class="btn btn-success">Selengkapnya</a>
            </div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="card" style="width: 18rem;">
            <i class="fas fa-futbol img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Ekstrakulikuler</h5>
                <p class="card-text">Ekskul untuk meningkatkan bakat minat siswa</p>
                <a href="/pendidikan" class="btn btn-success">Selengkapnya</a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="card" style="width: 18rem;">
            <i class="far fa-lightbulb img"></i>
            <div class="card-body text-center">
                <h5 class="card-title">Program Unggulan</h5>
                <p class="card-text">Sebagai penunjang kualitas siswa</p>
                <a href="/pendidikan" class="btn btn-success">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="main-2">
    <div class="foto" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="350">
        <img src="/img/how to train 3-bg.jpg" alt="">
    </div>
    <div class="tentang" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-offset="350">
        <h2>Tentang Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab adipisci, id optio inventore veritatis architecto sed quia cupiditate. Inventore placeat quae esse quidem voluptas ipsa alias beatae mollitia expedita maiores.</p>
        <a href="/profil">Selengkapnya</a>
    </div>
</div>

<div class="main-3">
    <h2 class="beranda-head">BERITA TERKINI</h2>
    <div class="berita-card">
        <div class="cards">
            <div class="imgbx">
                <img src="/img/avenger-endgame.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="imgbx">
                <img src="/img/vec.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="imgbx">
                <img src="/img/vec.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="imgbx">
                <img src="/img/vec.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="imgbx">
                <img src="/img/vec.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="imgbx">
                <img src="/img/vec.jpg" alt="">
            </div>
            <div class="berita">
                <h2>Berita Terkini</h2>
                <p>Nam quae, sunt obcaecati voluptate natus quas aliquam voluptatibus minima quis vero autem esse! Eaque nam obcaecati est, expedita commodi <a href="">Selengkapnya</a></p>
            </div>
        </div>
    </div>
</div>
<div class="main-4">
    <div class="label">
        <h2>GALERI</h2>
    </div>
    <div class="imgs">
        <a href=""><img class="img-1" src="/img/avenger-endgame.jpg" alt=""></a>
        <a href=""><img class="img-2" src="/img/frozen2-bg.jpg" alt=""></a>
        <a href=""><img class="img-3" src="/img/how to train 3-bg.jpg" alt=""></a>
    </div>
</div>
<?= $this->endSection(); ?>