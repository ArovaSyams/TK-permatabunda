<footer>
    <div class="foot">
        <div class="judul">
            <h3>TK PERMATA BUNDA BENGKULU</h3>
            <p>Copyrignt &copy; 2020 Taman Kanak-kanak Permata Bunda Bengkulu | Stackware comp. | All Right Reserved</p>
        </div>
        <div class="medsos">
            <a href="/hubungi"><i class="fas fa-map-marked-alt media"></i></a>
            <a href="/hubungi"><i class="bi bi-envelope-fill media"></i></a>
            <a href="/hubungi"><i class="bi bi-whatsapp media"></i></a>
            <a href="/hubungi"><i class="bi fas fa-phone media"></i></a>
        </div>
        <?php if (session()->has('admin')) : ?>
            <a href="/logout" class="btn btn-danger">Logout</a>
        <?php else : ?>
            <a href="/login" class="btn btn-primary">Login</a>
        <?php endif; ?>
    </div>
</footer>