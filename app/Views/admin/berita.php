<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Berita</h1>
<hr>
<?= session()->getFlashdata('pesan'); ?>
<?php foreach ($berita as $b) : ?>
    <div class="card card-berita mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="img-berita col-md-4">
                <a href="/berita/detail/<?= $b['id']; ?>"><img src="/img/berita/<?= $b['foto']; ?>" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="/berita/detail/<?= $b['id']; ?>" style="text-decoration: none; color: black;">
                        <h5 class=" card-title"><?= $b['judul_berita']; ?></h5>
                    </a>
                    <p class="card-text"><?= $b['highlight']; ?></p>
                    <p class="card-text"><small class="text-muted">Diupload Pada : <?= $b['created_at']; ?></small></p>
                    <a href="/berita/detail/<?= $b['id']; ?>" class="btn btn-success">Selengkapnya</a>
                    <a href="/admin/berita/<?= $b['id']; ?>" class="btn btn-primary">Edit</a>
                    <form action="/admin/deleteberita/<?= $b['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Semua informasi dari data ini akan dihapus secara permanen dan tidak dapat dikembalikan lagi, Apakah anda yakin?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $pager->links('berita', 'galeri_pagination'); ?>
<?= $this->endSection(); ?>