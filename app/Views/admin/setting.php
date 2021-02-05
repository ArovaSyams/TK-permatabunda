<?= $this->extend('layout/admin/admintemp'); ?>
<?= $this->section('admin'); ?>

<h1>Setting</h1>
<hr>
<div class="card p-3">
    <div class="card-head">
        <h3>Ubah Password</h3>
        <hr>
    </div>
    <div class="card-body">
        <?php if (!session()->has('confirm')) : ?>
            <form action="/auth/confirm" method="post">
                <div class="mb-3">
                    <?= session()->getFlashdata('pesan'); ?>
                    <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('confirm-password')) ? 'is-invalid' : ''; ?>" id="confirm-password" name="confirm-password" placeholder="Masukkan password anda">
                    <div class="invalid-feedback">
                        <?= $validation->getError('confirm-password'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php endif; ?>
        <?php if (session()->has('confirm')) : ?>
            <form action="/auth/editAkun/<?= $admin['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <?= session()->getFlashdata('pesan'); ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukkan password baru ">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi password baru ">
                </div>
                <button type="submit" class="btn btn-primary float-start">Submit</button>
            </form>
            <a href="/auth/logoutSetting" class="btn btn-danger ml-3">Batalkan</a>
        <?php endif; ?>
    </div>
</div>
<div class="card p-3 mt-3">
    <div class="card-head">
        <h3>Tambah Pengguna</h3>
        <hr>
    </div>
    <div class="card-body">
        <form action="/auth/tambahAkun" method="post">
            <div class="mb-3">
                <label for="username-baru" class="form-label">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username-baru')) ? 'is-invalid' : ''; ?>" id="username-baru" name="username-baru" placeholder="Masukkan username">
                <div class="invalid-feedback">
                    <?= $validation->getError('username-baru'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('password-baru')) ? 'is-invalid' : ''; ?>" id="password" name="password-baru" placeholder="Masukkan password">
                <div class="invalid-feedback">
                    <?= $validation->getError('password-baru'); ?>
                </div>
            </div>
            <div class="mb-3">

                <label for="password2" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password2" name="password-baru2" placeholder="Konfirmasi password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card p-3 mt-3">
    <div class="card-head">
        <h3>Daftar Admin</h3><hr>
    </div>
    <div class="alert alert-success" role="alert">Login Sebagai : <?= session()->get('admin'); ?></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>No.</th>
                        <th>Nama Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    <?php foreach($adminAll as $a) :?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['username']; ?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<div class="card p-3 mt-3">
    <div class="card-head">
        <h3>Hapus Akun</h3>
        <hr>
    </div>
    <div class="card-body">
        <form action="/auth/deleteakun/<?= $admin['id']; ?>>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger is-invalid" onclick="return confirm('Semua informasi dan akun dari data ini akan dihapus secara permanen dan tidak dapat dikembalikan lagi, Apakah anda yakin?')">HAPUS AKUN</button>
            <div class="invalid-feedback">
                Semua data dari akun ini akan hilang, namun data-data asli dari halaman, seperti berita, foto di galeri , mail contact us, dan informasi PPDB masih tersimpan dengan aman disini.
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>