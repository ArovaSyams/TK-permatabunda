<?= $this->extend('layout/logintemp'); ?>

<?= $this->section('auth'); ?>
<div class="card login">
    <div class="card-body">
        <h2 style="text-align: center;">Masuk</h2>
        <?= session()->getFlashdata('pesan'); ?>
        <form action="/auth/login" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" value="<?= old('username'); ?>" autofocus autocomplete="true">
                <div class="invalid-feedback">
                    <?= $validation->getError('username'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukkan Password">
                <div class="invalid-feedback">
                    <?= $validation->getError('password'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>


<?= $this->endSection(); ?>