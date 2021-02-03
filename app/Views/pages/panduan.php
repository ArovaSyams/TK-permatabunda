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
            <br>
            <h3>Apa Yang Bisa Anda Lakukan ?</h3>
            <hr>
            <p>Dalam pengoperasian website ini akan ada 2 section, diantaranya yaitu:</p>
            <ol>
                <li>Pengoperasian dalam halaman</li>
                <li>Pengoperasian dalam PPDB (Penerimaan peserta didik baru)</li>
            </ol>
            <br>
            <h4>1. Pengoperasian Dalam Halaman</h4>
            <hr>
            <p>Dalam pengoperasian dalam halaman ada 2 hal yang bisa anda tambahkan, edit, serta hapus. yaitu halaman Galeri dan Halaman Berita</p>
            <br>
            <h5>Pada halaman galeri</h5>
            <hr>
            <p>anda dapat menambahkan, megubah, serta menghapus gambar tergantung kebutuhan. Didalam galeri terdapat gambar yang bisa anda tambahkan melalui <i>'halaman admin > galeri sekolah > tambah gambar'</i>. didalam halaman 'tambah gambar' anda harus mengisi sesuai input yang diminta, dalam kasus ini terdapat 3 input yaitu :</p>
            <ol>
                <li>Nama foto : akan ditampilkan untuk nama dari foto tersebut</li>
                <li>Keterangan : untuk menampilkan keterangan dari foto</li>
                <li>Foto : foto yang ingin di upload</li>
            </ol>
            <br>
            <h5>Pada halaman berita</h5>
            <hr>
            <p>pada halaman ini anda dapat menambahkan, mengupdate, atau delete berita sekolah terkini. Anda dapat menambah berita melalui <i>'halaman admin > Berita sekolah > Tambah berita'</i> dengan beberapa input yang wajib dan tidak wajib diisi, yaitu :</p>
            <ol>
                <li>Judul Berita : Berupa judul yang akan ditampilkan di halaman awal berita</li>
                <li>Highlight : Keterangan awal berita, biasanya berupa isi singkat dalam berita</li>
                <li>Isi (paragraf 1) : untuk isi dalam berita dalam bentuk paragraf 1</li>
                <li>Paragraf 2 -> 5 : terdapat paragraf tambahan untuk isi berita, dan untuk bagian ini TIDAK WAJIB diisi.(jika paragraf berita masih kurang mohon untuk menghubungi developer)</li>
                <li>Foto : untuk foto label berita</li>
            </ol>
            <br>
            <h6>Panduan Tambah Berita</h6>
            <hr>
            <p>anda dapat menambah berita sekolah dan mengatur style text dengan cara berikut</p>
            <ol>
                <li>Membuat baris baru</li>
                anda bisa membuat baris baru dengan cara menambahkan tag &lt;br&gt;, contoh : <br>
                Pendaftaran peserta didik&lt;/br&gt; telah dibuka<br>
                hasilnya :<br>
                Pendaftaran peserta didik <br>telah dibuka
                <br><br>
                <li>Membuat font <i>italic</i></li>
                anda bisa membuat font italic dengan cara menambahkan tag &lt;i&gt; pada awal kalimat dan diakhiri dengan tag &lt;/i&gt;, contoh : <br>
                &lt;i&gt;Pendaftaran peserta didik baru&lt;/i&gt;<br>
                hasilnya :<br>
                <i>Pendaftaran peserta didik baru</i>
                <br><br>
                <li>Membuat font <b>bold</b></li>
                anda bisa membuat font bold dengan cara menambahkan tag &lt;b&gt; pada awal kalimat dan diakhiri dengan tag &lt;/b&gt;, contoh : <br>
                &lt;b&gt;Pendaftaran peserta didik baru&lt;/b&gt;<br>
                hasilnya :<br>
                <b>Pendaftaran peserta didik baru</b>
                <br><br>
                <li>Membuat font <u>underline</u></li>
                anda bisa membuat font underline dengan cara menambahkan tag &lt;u&gt; pada awal kalimat dan diakhiri dengan tag &lt;/u&gt;, contoh : <br>
                &lt;u&gt;Pendaftaran peserta didik baru&lt;/u&gt;<br>
                hasilnya :<br>
                <u>Pendaftaran peserta didik baru</u>
                <br><br>
                <li>Membuat list</li>
                ada 2 jenis list, yaitu :
                <ol>
                    <li><b>Tidak berurut (berbentuk simbol)</b></li>
                    anda bisa membuat list dengan cara menambahkan tag &lt;ul&gt; pada awal kalimat dan diakhiri dengan tag &lt;/ul&gt;, yang kemudian didalamnya diberi tag &lt;li&gt; dan diakhiri &lt;/li&gt;, contoh : <br>
                    &lt;ul&gt;<br>
                    &lt;li&gt;List 1&lt;/li&gt;<br>
                    &lt;li&gt;List 2&lt;/li&gt;<br>
                    &lt;li&gt;List 3&lt;/li&gt;<br>
                    &lt;/ul&gt;<br>
                    hasilnya :<br>
                    <ul>
                        <li>list 1</li>
                        <li>list 2</li>
                        <li>list 3</li>
                    </ul>
                    <li><b>Berurut (berbentuk angka)</b></li>
                    anda bisa membuat list dengan cara menambahkan tag &lt;ol&gt; pada awal kalimat dan diakhiri dengan tag &lt;/ol&gt;, yang kemudian didalamnya diberi tag &lt;li&gt; dan diakhiri &lt;/li&gt;, contoh : <br>
                    &lt;ol&gt;<br>
                    &lt;li&gt;List 1&lt;/li&gt;<br>
                    &lt;li&gt;List 2&lt;/li&gt;<br>
                    &lt;li&gt;List 3&lt;/li&gt;<br>
                    &lt;/ol&gt;<br>
                    hasilnya :<br>
                    <ol>
                        <li>list 1</li>
                        <li>list 2</li>
                        <li>list 3</li>
                    </ol>
                </ol>
            </ol>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>