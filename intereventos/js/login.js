$(document).ready(function() {
    $("#modal-cadastroUsuario").iziModal();
    $("#cadastroUsuario").on('click', function() {
        $("#modal-cadastroUsuario").iziModal('open');
    });

    $("#logar").on('click', function() {
        $.ajax({
            method: "POST",
            url: "login_model.php",
            data: { email: "John", senha: "Boston" }
          })
        .done(function(msg) {
            alert("Data Saved: " + msg );
            console.log(msg);
            event.preventDefault();
        });

        
    })
})