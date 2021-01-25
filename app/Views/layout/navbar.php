<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="logo col-3" href="/">TK PERMATA BUNDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="active" aria-current="page" href="/">BERANDA</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="/profil">PROFIL</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="/pendidikan">PENDIDIKAN</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="/galeri">GALERI</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="/berita">BERITA</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="/hubungi">HUBUNGI</a>
        </li>
        <?php if (session()->get('admin')) : ?>
          <li class="nav-item">
            <a aria-current="page" href="/admin">ADMIN</a>
          </li>
        <?php else : ?>
        <?php endif; ?>
      </ul>
      <a href="" class="btn btn-primary ppdb">PPDB</a>
    </div>
  </div>
</nav>