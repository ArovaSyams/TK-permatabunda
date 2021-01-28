<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="head"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Panduan Administrator</h1>
            <hr>
            <p>Panduan ini dikhususkan untuk administrator untuk menjalankan website ini dari latar belakang, apa yang bisa dilakukan terdapat dalam buku panduan ini mohon untuk dibaca dengan seksama.</p>
            <p><b>PERHATIAN : Sangat disarankan untuk mengoperasikan halaman admin ini dalam tampilan desktop komputer.</b></p>
            <h4>Apa Yang Bisa Anda Lakukan ?</h4>
            <p>Dalam pengoperasian website ini akan ada 2 section, diantaranya yaitu:</p>
            <ul>
                <li>Pengoperasian dalam halaman</li>
                <li>Pengoperasian dalam PPDB (Penerimaan peserta didik baru)</li>
            </ul>
            <h5>1. Pengoperasian Dalam Halaman</h5>
            <p>Dalam pengoperasian dalam halaman ada 2 hal yang bisa anda tambahkan, edit, serta hapus. yaitu halaman Galeri dan Halaman Berita</p>
            <h6>Pada halaman galeri</h6>
            <p>anda dapat menambahkan, megubah, serta menghapus gambar tergantung kebutuhan. Didalam galeri terdapat gambar yang bisa anda tambahkan melalui 'halaman admin > galeri sekolah > tambah gambar'. didalam halaman 'tambah gambar' anda harus mengisi sesuai input yang diminta, dalam kasus ini terdapat 3 input yaitu :</p>
            <ol>
                <li>Nama foto : akan ditampilkan untuk nama dari foto tersebut</li>
                <li>Keterangan : untuk menampilkan keterangan dari foto</li>
                <li>Foto : foto yang ingin di upload</li>
            </ol>
            <h6>Pada halaman berita</h6>
            <p>pada halaman ini anda dapat menambahkan, mengupdate, atau delete berita sekolah terkini. Anda dapat menambah berita melalui 'halaman admin > Berita sekolah > Tambah berita' dengan beberapa input yang wajib dan tidak wajib diisi, yaitu :</p>
            <ol>
                <li>Judul Berita : Berupa judul yang akan ditampilkan di halaman awal berita</li>
                <li>Highlight : Keterangan awal berita, biasanya berupa isi singkat dalam berita</li>
                <li>Isi (paragraf 1) : untuk isi dalam berita dalam bentuk paragraf 1</li> 
                <li>Paragraf 2 -> 5 : terdapat paragraf tambahan untuk isi berita, dan untuk bagian ini TIDAK WAJIB diisi.(jika paragraf berita masih kurang mohon untuk menghubungi developer)</li>
                <li>Foto : untuk foto label berita</li>
            </ol>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>