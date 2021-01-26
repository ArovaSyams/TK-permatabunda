<?= $this->extend('layout/admin/admintemp'); ?>

<?= $this->section('admin'); ?>

<h1>Galeri Sekolah</h1>
<hr>
<?= session()->getFlashdata('pesan'); ?>
<div class="galeri">
    <?php foreach ($layout as $l) : ?>
        <div class="galeri-foto">
            <img src="/img/<?= $l['foto']; ?>" alt="">
            <a href="/admin/galeri/<?= $l['id']; ?>" class="btn btn-primary col-6 ml-3">Edit</a>
            <form action="/admin/deletegaleri/<?= $l['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger col-5" onclick="return confirm('Apakah anda yakin?')">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>
<?= $pager->links('galeri', 'galeri_pagination'); ?>


<?= $this->endSection(); ?>