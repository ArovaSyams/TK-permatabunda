<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="head"></div>
<div class="detail-berita-body">
    <div class="detail-berita">
        <div class="card card-detail-berita">
            <img src="/img/berita/<?= $berita['foto']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">Diupload Pada : <?= $berita['created_at']; ?></small></p>
                <h2 class="card-title"><?= $berita['judul_berita']; ?></h2>
                <br>
                <p class="card-text"><?= $berita['paragraf_1']; ?></p>
                <p class="card-text"><?= $berita['paragraf_2']; ?></p>
                <p class="card-text"><?= $berita['paragraf_3']; ?></p>
                <p class="card-text"><?= $berita['paragraf_4']; ?></p>
                <p class="card-text"><?= $berita['paragraf_5']; ?></p>
            </div>
        </div>
        <div class="card berita-lain">
            <div class="card-body">
                <h4>Berita Lainnya</h4>
                <?php foreach ($beritaLain as $bl) : ?>
                    <a href="/berita/detail/<?= $bl['id']; ?>" style="text-decoration: none; color: black;">
                        <div class="card berita-lainnya">
                            <div class="card-body">
                                <h6><?= $bl['judul_berita']; ?></h6>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>