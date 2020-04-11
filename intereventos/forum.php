<?php session_start();
require_once 'init.php';
require_once 'check.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="node_modules/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/css/style.css">
  <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css\css\forum.css">

  <title>Forum & Comunidade</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
    <div class="container">
      <a class="navbar-brand h1 mb-0" href="#">Inter Eventos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav" mr-auto>
          <li class="nav-item ">
            <a class="nav-link" href="index.jsp">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Depoimentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forum.jsp">Forum</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop" role="button"> Social</a>
            <div class="dropdown-menu" aria-labelledby="dropdown">
              <a class="dropdown-item" href="#">Facebook</a>
              <a class="dropdown-item" href="#">Twitter</a>
              <a class="dropdown-item" href="#">Instagram</a>
            </div>
          </li>
        </ul>

        <form class="form-inline">
          <input class="form-control ml-2 mr-2" type="search" name="" placeholder="Buscar...">
          <button class="btn btn-dark" type="submit">Ok</button>
        </form>

      </div>
    </div>
  </nav>


  <div id="carouselSite" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="imagem/slidePronto.jpg" class="img-fluid d-block">
        <div class="carousel-caption d-none d-md-block">
          <h3>Baladas Inesquecíveis</h3>
          <p>Torne seus dias de tédios e frustrações em dias de diversõa</p>
        </div>
      </div>

      <div class="carousel-item ">
        <img src="imagem/slidePronto.jpg" class="img-fluid d-block">
        <div class="carousel-caption d-none d-md-block">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item ">
        <img src="imagem/slidePronto.jpg" class="img-fluid d-block">
        <div class="carousel-caption d-none d-md-block">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item ">
        <img src="imagem/daniel1234.jpg" class="img-fluid d-block">
        <div class="carousel-caption d-none d-md-block">
          <h3></h3>
          <p></p>
        </div>
      </div>
    </div>

    <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

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

      <div class="card mb-3">
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
      </div>

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
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script>
    $(function() {
      $('[data-toggle="popover"]').popover();
    });

    $(document).on('click', "#salvar-nova-resposta", () => {
      let descricao = $("#nova_resposta").val();
      let autor = $("#nome_usuario").val();
      let id_postagem = parseInt($("#perguntasRespostas").attr('data-aviso'));

      $("#perguntasRespostas").append(`
        <div class="card mb-3">
          <div class="card-header pergunta">
            <h5 class="nome card-title"> Autor: ${autor}</h5>
            <p class="card-text descricao float-left">${descricao}</p>
            <button class="btn-light float-right text-capitalize">Responder</button>
          </div>
        </div>
      `);

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

        $("#perguntasRespostas").append(`
        <div class="card mb-3">
          <div class="card-header pergunta">
            <h5 class="nome card-title"> Autor: ${autor}</h5>
            <p class="card-text descricao float-left">${desc_postagem}</p>
            <button class="btn-light float-right text-capitalize">Responder</button>
          </div>
        </div>
      `);
        
      }).fail((fail) => {
        console.log(fail);
        
      });

    })

    function box_mensagem(elemento) {
      let id_postagem = $(elemento).attr('id');
      let dados = {
        id_postagem
      }
      $.ajax({
        method: "POST",
        url: "forum_model.php",
        dataType: "json",
        data:dados
      }).done((resp) => {
        console.log(resp);
        
      }).fail((fail) =>{
        console.log(fail);
      });
    }
  </script>
</body>

</html>