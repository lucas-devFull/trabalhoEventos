<?php session_start();
require_once 'init.php';
require_once 'check.php';
require_once 'header.php';
?>
  <div class="container-fluid ">
    <div class="row">

      <div class="col-12 text-center mt-3">
        <h1 class="display-3 text-light"><i class="fa fa-comments text-light"></i> Forum de Avisos</h1>
        <p class="lead text-light">Bem Vindo à Comunidade</p>
        <p class="lead text-light text-capitalize"> <?php echo $_SESSION['username']; ?> | <a class="text-secondary" href="logout.php">Sair</a></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="1" onclick="box_mensagem(this)">
        <div class="card mb-3 card-avisos">
          <img class="card-group" src="imagem/galala.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="nome card-title">Festa do Sertanejo</h5>
            <p class="card-text descricao">Uma das maiores festa sertaneja acontece aqui, venha se divertir!</p>
            <p class="card-text endereco"><small class="text-muted">Rua: josé rodrigo da silva n:45, jardim aeroport</small></p>
            <p class="text-muted comentarios">Comentarios: 24</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="2" onclick="box_mensagem(this)">
        <div class="card mb-3 card-avisos">
          <img class="card-group" src="imagem/Daniel2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="nome card-title">Festa do Montanha russa</h5>
            <p class="card-text descricao">A festa que vai deixar vocé em coma, venha garantir seu ingresso</p>
            <p class="card-text endereco"><small class="text-muted">Rua: Avenidá São paio vidal, Numero: 111</small></p>
            <p class="text-muted comentarios">Comentarios: 11</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="3" onclick="box_mensagem(this)">
        <div class="card mb-3 card-avisos">
          <img class="card-group" src="imagem/daniel1234.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="nome card-title">Festa do Curujas</h5>
            <p class="card-text descricao">A festa que mais tem adolecentes do planeta!, entre na moda e participe dessa festa de arrasar!</p>
            <p class="card-text endereco"><small class="text-muted">Rua: Munhos da silva marinho Numero:1221, Chacara dos laranjais</small></p>
            <p class="text-muted comentarios">Comentarios: 12</p>
          </div>
        </div>
      </div>
    </div>

    <div id="perguntasRespostas" data-aviso="1">

      <!-- <div class="card mb-3">
        <div class="card-header pergunta">
          <h5 class="nome card-title"> Autor: Maria</h5>
          <p class="card-text descricao float-left">Quando seria a proxuma festa?</p>
          <button class="btn-light float-right text-capitalize">Responder</button>
        </div>
        <div class="card-body">
          <div class="card-text resposta">
            <span class="text-muted"> Cristiano</span>
            <div class="card-text ">
              Resposta : na proxima quinta feira
            </div>
          </div>
        </div>
      </div> -->

    </div>

    <div id="box-nova-mensagem">
      <div class="perguntaPraResponder none"></div>
      <textarea name="nova_resposta" id="nova_resposta" cols="30" rows="10"></textarea>
      <div class="btn-nova-mensagem">
        <button class="btn btn-dark" id="salvar-nova-resposta">Postar</button>
      </div>
    </div>
  </div>
  <input type="hidden" name="nome_usuario" id="nome_usuario" value="<?php echo $_SESSION['username']; ?>">




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="node_modules/jquery/dist/jquery.js"></script> -->
  <!-- <script src="node_modules/popper.js/dist/umd/popper.js"></script> -->
  <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script> -->
<?php require "footer.php" ?>
  <script>
    $(function() {
      $('[data-toggle="popover"]').popover();
    });

    
    // $(document).on('click', ".btn-responder-nova-pergunta", (e) => {
    //   let nome_usuario = $("#nome_usuario").val();
    //   $("body").attr("data-resposta-open", "1");
    //   e.stopPropagation();
    //   $(e.target).siblings(".card-text").addClass("efeito_responder")
    //   $(e.target).siblings(".card-text").append(`
    //     <div class="repondendo_pergunta">
    //       <label class="d-block text-muted text-capitalize" style="font-weight:600">${nome_usuario} : </label>
    //       <input type="text" value="" name="resposta" id="resposta_pergunta">
    //       <button class="btn" id="btn-postar-resposta">Responder</button>
    //     </div>
    //   `)

    //   $(e.target).attr("disabled",'disabled')
    // })
    $(document).on('click', ".btn-responder", (e) => {
      let nome_usuario = $("#nome_usuario").val();
      $("body").attr("data-resposta-open", "1");
      $(e.target).closest(".card-text").addClass("efeito_responder")
      $(e.target).closest(".card-text").append(`
        <div class="repondendo_pergunta">
          <label class="d-block text-muted text-capitalize" style="font-weight:600">${nome_usuario} : </label>
          <input type="text" value="" name="resposta" id="resposta_pergunta">
          <button class="btn" id="btn-postar-resposta">Responder</button>
        </div>
      `)

      $(e.target).attr("disabled",'disabled')
    })

    $(document).on('click', "body", (e) => {
      if(!parseInt($("body").attr("data-resposta-open")) || $(e.target).closest(".efeito_responder").length) return
      $(".repondendo_pergunta").remove();
      $(".efeito_responder").removeClass("efeito_responder");
      $("button[disabled=disabled]").removeAttr("disabled");
      $(this).attr("data-resposta-open","0");
    })

    $(document).on('click', "#btn-postar-resposta", (e) => {
      let autor = $(e.target).siblings('label').text().replace(":","")
      let descricao = $(e.target).siblings('input').val()
      let id_pergunta = parseInt($(e.target).closest('.id_pergunta').attr("data-id-pergunta"))
      let id_postagem = parseInt($("#perguntasRespostas").attr("data-aviso"))
      
      
     let dados = {
       autor,
       descricao,
       id_pergunta,
       id_postagem,
       acao:"insert",
     }

     $.ajax({
       method: "POST",
       url: "forum_model.php",
       dataType: "json",
       data:dados
     }).done( (data) => {
      let id_postagem = $("#perguntasRespostas").attr('data-aviso')
      recarregarMensagens(id_postagem)
     }).fail((fail) => {
     });

   })

    $(document).on('click', "#salvar-nova-resposta", () => {
      let descricao = $("#nova_resposta").val();
      let autor = $("#nome_usuario").val();
      let id_postagem = parseInt($("#perguntasRespostas").attr('data-aviso'));

      let dados = {
        autor,
        descricao,
        id_pergunta: null,
        id_postagem,
        acao:"insert",
      }

      $.ajax({
        method: "POST",
        url: "forum_model.php",
        dataType: "json",
        data:dados
      }).done( (data) => {
        $("#nova_resposta").val("");
        $("#perguntasRespostas").append(`
        <div class="card mb-3 id_pergunta" data-id-pergunta="${data.id}">
          <div class="card-header pergunta">
            <h5 class="nome card-title text-capitalize"> Autor: ${autor}</h5>
            <p class="card-text descricao float-left">${descricao}</p>
            <button class="btn-light float-right text-capitalize">Responder</button>
          </div>
        </div>
      `);
        
      }).fail((fail) => {
        alert("fail")
        console.log(fail);
        
        
      });

    })

    function box_mensagem(elemento) {
      let id_postagem = $(elemento).attr('id');
      recarregarMensagens(id_postagem)
    }

    function recarregarMensagens(id_postagem) {

     $("#perguntasRespostas").attr('data-aviso', id_postagem)

      let dados = {
        id_postagem,
        acao:"get"
      }

      $.ajax({
        method: "POST",
        url: "forum_model.php",
        dataType: "json",
        data:dados
      }).done((resp) => {

        $("#perguntasRespostas").html("");
        for(const postagem of resp) {
          if( parseInt(postagem.id_pergunta) ) {
            let marginIndext = 15;
            let espacoResposta = parseInt($(`div[data-id-pergunta=${postagem.id_pergunta}]`).css("margin-left").replace("px",""))
            $(`div[data-id-pergunta=${postagem.id_pergunta}]`).append(`
              <div class="card-body p-0 id_pergunta" style="margin-left: ${espacoResposta + marginIndext}px" data-id-pergunta=${postagem.id}>
                <div class="card-text resposta">
                  <span class="text-muted text-capitalize"> ${postagem.autor}</span>
                  <div class="card-text ">
                    Resposta : ${postagem.descricao}
                    <button class="btn-light text-capitalize btn-responder">Responder</button>
                  </div>
                </div>
              </div>
            `)
          } else {
            $("#perguntasRespostas").append(`
              <div class="card mb-3 id_pergunta" data-id-pergunta=${postagem.id}>
                <div class="card-header pergunta">
                  <h5 class="nome card-title"> Autor: ${postagem.autor}</h5>
                  <p class="w-100 card-text descricao float-left">
                    ${postagem.descricao}
                    <button class="btn-light float-right text-capitalize btn-responder">Responder</button>
                  </p>
                </div>
              </div>
            `)
          }
        }
        
      }).fail((fail) =>{
        console.log(fail);
      });
    }

    

  </script>
</body>

</html>