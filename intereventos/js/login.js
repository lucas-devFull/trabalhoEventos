$(document).ready(function() {
    $("#modal-cadastroUsuario").iziModal();
    $("#cadastroUsuario").on('click', function() {
        $("#modal-cadastroUsuario").iziModal('open');
    })
})