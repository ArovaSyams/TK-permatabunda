<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- My Own CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/aos.css">
    <script src="https://kit.fontawesome.com/6599811285.js" crossorigin="anonymous"></script>

    <title><?= $title; ?></title>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script type="text/javascript">
        //Nav bar Transition
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/js/aos.js"></script>
    <script type="text/javascript">
        AOS.init();
    </script>
    <script type="text/javascript">
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var namafoto = button.getAttribute('data-bs-namafoto')
            var foto = button.getAttribute('data-bs-foto')
            var keterangan = button.getAttribute('data-bs-keterangan')
            var created = button.getAttribute('data-bs-created')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalNamafoto = exampleModal.querySelector('.modal-title')
            var modalKeterangan = exampleModal.querySelector('.keterangan-modal')
            var modalCreated = exampleModal.querySelector('.created-modal')

            modalNamafoto.textContent = namafoto
            // modalFoto.value= foto
            $('.img-modal').attr('src', foto)
            modalKeterangan.textContent = keterangan
            modalCreated.textContent = created

        })
    </script>
</body>

</html>