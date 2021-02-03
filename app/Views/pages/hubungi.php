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
                <form action="" method="post" class="col-8 contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="<?= old('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email / No. Telepon</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email / Nomor Telepon" value="<?= old('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Kirim Sebagai</label>
                        <select class="form-select col-sm-2 samping mr-3" name="role">
                            <option selected value="">-Pilih Peran-</option>
                            <option value="Maimunah">Calon Peserta Didik Baru</option>
                            <option value="Restu">Orang tua Murid</option>
                            <option value="Genta">Pengunjung</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Masukkan Pesan"><?= old('pesan'); ?></textarea>
                    </div>
                </form>
                <div class="text-muted contact-note">Pesan anda akan kami jawab melalui email / No. handphone tertara dengan segera</div>
            </div>
        </div>
    </div>
    <h3>Kontak Kami</h3>
    <hr>
    <div class="contact">
        <p class="link"><i class="fas fa-map-marked-alt hub"></i>&nbsp &nbsp Jln. Telaga Dewa, Pagar Dewa, Kec. Selebar, Kota Bengkulu, Bengkulu, 38211</p>
        <p class="link"><i class="fas fa-phone hub"></i>&nbsp 0822-3183-0866</p>
        <p class="link"><i class="bi bi-whatsapp hub"></i>&nbsp 0822-3183-0866</p>
        <p class="link"><i class="bi bi-envelope-fill hub"></i>&nbsp tkpermatabunda1998@gmail.com</p><br>
    </div>
</div>
<?= $this->endSection(); ?>