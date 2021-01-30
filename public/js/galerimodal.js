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