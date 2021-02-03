<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header1">
    <img src="/img/pages/beranda.jpg" class="img-fluid" alt="">
    <h1 data-aos="fade-down" data-aos-duration="1500">TK PERMATA BUNDA BENGKULU</h1>
    <p>Taman Kanak-kanak Permata Bunda adalah TK yang berbasis islami dibawah naungan<br> DWP (Dharma Wanita Persatuan) IAIN Bengkulu </p>
    <a data-aos="fade-up" data-aos-duration="1500" href="#" class="btn btn-primary col-2">Daftar sekarang</a>
    <?= session()->getFlashdata('pesan'); ?>
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
        <img src="/img/pages/img5.jpeg" alt="">
    </div>
    <div class="tentang" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-offset="350">
        <h2>Tentang Kami</h2>
        <p>PAUD Permata Bunda didirikan pada tahun 1997 dibawah naungan Yayasan Permata Bunda Dharma Wanita IAIN Bengkulu. Tokoh yang paling berjasa dalam membidangi lahirnya PAUD Permata Bunda adalah Umi Husnaini dan Ibu Asiyah (Ibu Rektor IAIN Bengkulu).</p>
        <a href="/profil">Selengkapnya</a>
    </div>
</div>

<div class="main-3">
    <h2 class="beranda-head">BERITA TERKINI</h2>
    <div class="berita-card">
        <?php foreach ($berita as $b) : ?>
            <div class="cards">
                <div class="imgbx">
                    <img src="/img/berita/<?= $b['foto']; ?>" alt="">
                </div>
                <div class="berita">
                    <h6><?= $b['judul_berita']; ?></h6>
                    <p><small class="text-muted">Diupload Pada : <?= $b['created_at']; ?></small></p>
                    <a href="/berita/detail/<?= $b['id']; ?>" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="main-5">
    <div class="card contact-beranda">
        <div class="card-body contact-body">
            <h2>HUBUNGI KAMI</h2>
            <form action="/pages/savecontact" method="post" class="col-8 contact-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Masukkan Nama" value="<?= old('name'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('name'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email / No. Handphone</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Alamat Email / Nomor Handphone" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Kirim Sebagai</label>
                    <select class="form-select col-sm-2 mr-3 <?= ($validation->hasError('role')) ? 'is-invalid' : ''; ?>" name="role">
                        <option selected value="">-Pilih Peran-</option>
                        <option value="Wali calon peserta didik baru">Wali calon peserta didik baru</option>
                        <option value="Orang tua murid">Orang tua Murid</option>
                        <option value="Pengunjung">Pengunjung</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('role'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control <?= ($validation->hasError('pesan')) ? 'is-invalid' : ''; ?>" id="pesan" name="pesan" rows="3" placeholder="Masukkan Pesan"><?= old('pesan'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pesan'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            <div class="text-muted contact-note">Catatan : Pesan anda akan kami jawab melalui email / No. handphone tertara dengan segera</div>
        </div>
    </div>
</div>
<div class="main-4">
    <div class="label">
        <h2>GALERI</h2>
    </div>
    <div class="imgs">
        <a href="/galeri"><img class="img-1" src="/img/pages/img1.jpg" alt=""></a>
        <a href="/galeri"><img class="img-2" src="/img/pages/img2.jpg" alt=""></a>
        <a href="/galeri"><img class="img-3" src="/img/pages/img3.jpeg" alt=""></a>
    </div>
</div>
<?= $this->endSection(); ?>