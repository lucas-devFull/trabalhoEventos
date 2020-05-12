$(document).ready(function() {

    $(".input-default").keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $("#logar").click();  
        }
    });

    $("#modal-cadastroUsuario").iziModal();
    $("#cadastroUsuario").on('click', function() {
        $("#modal-cadastroUsuario").iziModal('open');
    });

    $("#logar").on('click', function() {
        $.ajax({
            method: "POST",
            url: "valida.php",
            data: {email:$("#email").val(), senha:$("#password1").val()}
          })
        .done(function(data) {
            if (JSON.parse(data).status == true) {
                iziToast.success({
                    title: 'OK',
                    message: 'Logado com sucesso',
                    timeout: 2000,
                    onClosing: function() {
                        window.location.href = "index.php";
                    }
                });
            }else{
                iziToast.warning({
                    title: 'Atenção',
                    message: 'Erro ao realizar login, verifique o login e senha',
                    timeout: 2000,
                    onClosing: function() {
                        $(".input-default").val('');
                    }
                });
            }
        });        
    })

    $("#cadUsuario").on('click', function() {
        $.ajax({
            method: "POST",
            url: "incluir_usuario.php",
            data: {nome:$("#nome_usuario").val(), email:$("#email_usuario").val(), senha:$("#senha_usuario").val()}
          })
        .done(function(data) {
            console.log(data);
            if (JSON.parse(data).status == true) {
                iziToast.success({
                    title: 'OK',
                    message: 'usuario cadastrado com sucesso',
                    timeout: 2000,
                    onClosing: function() {
                        $("input[data-bind='cad_usuario']").val('');
                        $("#modal-cadastroUsuario").iziModal('close');
                        $(".input-default").val('');
                    }
                });
            }else{
                iziToast.warning({
                    title: 'Atenção',
                    message: 'Erro ao realizar login Verifique o login e senha',
                    timeout: 1500,
                    onClosing: function() {
                        $("input[data-bind='cad_usuario']").val('');
                    }
                });
            }
        });  
    })
})