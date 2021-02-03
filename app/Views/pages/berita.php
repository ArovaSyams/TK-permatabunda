<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="head"></div>
<h1 style="text-align: center; margin-top: 20px;">Berita Terkini</h1>
<hr>
<div class="berita">
  <?php foreach ($berita as $b) : ?>
    <div class="card card-berita mb-3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="img-berita col-md-4">
          <a href="/berita/detail/<?= $b['id']; ?>"><img src="/img/berita/<?= $b['foto']; ?>" alt="..."></a>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="/berita/detail/<?= $b['id']; ?>" style="text-decoration: none; color: black;">
              <h5 class="card-title"><?= $b['judul_berita']; ?></h5>
            </a>
            <p class="card-text"><?= $b['highlight']; ?></p>
            <p class="card-text"><small class="text-muted">Diupload pada : <?= $b['created_at']; ?></small></p>
            <a href="/berita/detail/<?= $b['id']; ?>" class="btn btn-success">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <?= $pager->links('berita', 'galeri_pagination'); ?>
</div>

<?= $this->endSection(); ?>