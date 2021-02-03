<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="head"></div>
<div class="hubungi">
    <h2>Hubungi Kami</h2>
    <hr>
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
                        <label for="email" class="form-label">Email / No. Telepon</label>
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Alamat Email / Nomor Telepon" value="<?= old('email'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Kirim Sebagai</label>
                        <select class="form-select col-sm-2 samping mr-3 <?= ($validation->hasError('role')) ? 'is-invalid' : ''; ?>" name="role">
                            <option selected value="">-Pilih Peran-</option>
                            <option value="Calon Peserta Didik Baru">Calon peserta didik baru</option>
                            <option value="Orang tua murid">Orang tua murid</option>
                            <option value="Pengunjung">Pengunjung</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('role'); ?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control <?= ($validation->hasError('pesan')) ? 'is-invalid' : ''; ?>" id="pesan" name="pesan" rows="3" placeholder="Masukkan Pesan"><?= old('pesan'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('pesan'); ?>
                        </div>
                    </div>
                    <div class="text-muted contact-note mb-1">Pesan anda akan kami jawab melalui email / No. HP tertara dengan segera</div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <h3>Kontak Kami</h3>
    <hr>
    <div class="contact">
        <p class="link"><i class="fas fa-map-marked-alt hub"></i>&nbsp; Jln. Telaga Dewa, Pagar Dewa, Kec. Selebar, Kota Bengkulu, Bengkulu, 38211</p>
        <p class="link"><i class="bi bi-envelope-fill hub"></i>&nbsp; tkpermatabunda1998@gmail.com</p><br>
        <p class="link"><i class="fas fa-phone hub"></i>&nbsp; 0822-3183-0866</p>
        <p class="link"><i class="bi bi-whatsapp hub"></i>&nbsp; 0822-3183-0866</p>
    </div>
</div>
<?= $this->endSection(); ?>