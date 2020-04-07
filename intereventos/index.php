<?php
session_start();
//include_once("verifica.php");
include_once("conexao.php");
require 'init.php';


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="css/css/style.css">
  <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inter Eventos</title>
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
        <a class="nav-link text-light" href="index.php">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Depoimentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Sobre nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="forum.php">Forum</a>
      </li>  

    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop" role="button"> Social</a>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Twitter</a>
          <a class="dropdown-item" href="#">Instagram</a>
          <a class="dropdown-item" href="#"></a>

        </div>
      </li>
    </ul>

    <form class="form-inline">
      <input class="form-control ml-2 mr-2" type="search" name="" placeholder="Buscar...">
      <button class="btn btn-dark" type="submit">Buscar</button>
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
        <h3>Aproveitando o melhor do baile</h3>
        <p>Segue a musíca e deixa-se levar pelo som</p>
      </div>
    </div>


    <div class="carousel-item ">    
      <img src="imagem/slidePronto.jpg" class="img-fluid d-block">
      <div class="carousel-caption d-none d-md-block">
        <h3>Chega da vida normal</h3>
        <p>Ser normal você será só mais um e o melhor é ser diferente</p>
      </div>
    </div>

    <div class="carousel-item ">    
      <img src="imagem/daniel1234.jpg" class="img-fluid d-block">
      <div class="carousel-caption d-none d-md-block">
        <h3>Rave que te faz flutuar</h3>
        <p>Chega de calar a musíca com ignorância</p>
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

<div class="container">
  <div class="row ">
    <div class="col-12 text-center mt-3">
      <h1 class="display-3 text-light"><i class="fa fa-comments text-light" ></i> Seja Bem Vindo(a)</h1>
      <p class="lead text-light">

       
      <?php if (isset($_SESSION['username'])): ?>  
        <p>Olá, <?php echo $_SESSION['username']; ?>. <a href="forum.php">Forum</a> | <a href="logout.php"> Sair</a></p>
        <?php else: ?> 
         <p class="text-light">Olá Visitante. <a href="login.php">Clique aqui para fazer o login</a></p>
        <?php endif; ?> 


    </div>
  </div>
  <div class="row mb-5">
    <div class="col-3">
      <nav id="navbarVertical" class="navbar navbar-light bg-dark">
        <nav class="nav nav-pills flex-column">
          <a  class="nav-link text-light" href="item1">Sorteios e Promoções</a>
          <nav class="nav nav-pills flex-column">
            <a  class="nav-link ml-3 text-light" href="item1">Baladas Em Destaque</a>
            <a  class="nav-link ml-3 text-light" href="item1">Baladas Open Bar</a>
          </nav>

          <a  class="nav-link my-3 text-light" href="item2">Festa Em Destaque</a>
          <a  class="nav-link my-3 text-light" href="item2">Festa de última Hora</a>
          <a  class="nav-link my-3 text-light" href="item2">Festa dos 10zão</a>
          <a  class="nav-link my-3 text-light" href="item2">Festa dos cachaça</a>
          <a  class="nav-link my-3 text-light" href="item2">As Zueira da balada</a>
          <a  class="nav-link my-3 text-light" href="item2">Fotos secretas</a>
          <a  class="nav-link my-3 text-light" href="item2">Novas festas</a>
          <a  class="nav-link my-3 text-light" href="item2">Festa dos solteiros</a>
          <a  class="nav-link my-3 text-light" href="item2">Seleção de Bebidas</a>
          <a  class="nav-link my-3 text-light" href="item2">Pesquisa para Promoções</a>
          <a  class="nav-link my-3 text-light" href="item2">Sorteio de Pulseiras</a>
          <a  class="nav-link my-3 text-light" href="item2">Cupom de Descontos</a>

          <a  class="nav-link text-light" href="item3">Entrar Forum</a>
          <nav class="nav nav-pills flex-column">
            <a  class="nav-link ml-3 text-light" href="item3">Sorteios Relâmpagos</a>
            <a  class="nav-link ml-3 text-light" href="item1">Cupons Promocionais</a>
          </nav>

        </nav>
      </nav>
    </div>
    <div class="col-9">

      <div class="card mb-3">
        <img class="card-group" src="imagem/galala.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Festa do Sertanejo</h5>
          <p class="card-text">Uma das maiores festa sertaneja acontece aqui, venha se divertir!</p>
          <p class="card-text"><small class="text-muted">Rua: josé rodrigo da silva n:45, jardim aeroport</small></p>
        </div>
      </div>   
      <div class="card mb-3">
        <img class="card-group" src="imagem/galala.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Festa do Sertanejo</h5>
          <p class="card-text">Uma das maiores festa sertaneja acontece aqui, venha se divertir!</p>
          <p class="card-text"><small class="text-muted">Rua: josé rodrigo da silva n:45, jardim aeroport</small></p>
        </div>
      </div> 
      <div class="card mb-3">
        <img class="card-group" src="imagem/galala.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Festa do Sertanejo</h5>
          <p class="card-text">Uma das maiores festa sertaneja acontece aqui, venha se divertir!</p>
          <p class="card-text"><small class="text-muted">Rua: josé rodrigo da silva n:45, jardim aeroport</small></p>
        </div>
      </div> 

    </div>
  </div>


  <div class="row justify-content-sm-center">    
    <div class="col-sm-6 col-md-4">    
     <div class="card mb-5">

      <img class="card-img-top" src="imagem/prontotbm.jpg">
      <div class="card-body">
        <h4 class="card-title">Os Melhores DJ's</h4>
        <h6 class="card-subtitle mb-2 text-muted">Green valley</h6>
        <p class="card-text">aki entra só a mensagem do evento</p>
        <a href="#" class="card-link">entrar</a>
        <a href="#" class="card-link">Ler mais</a>
      </div>

    </div>
  </div>
  <div class="col-sm-6 col-md-4">

   <div class="card mb-5">

    <img class="card-img-top" src="imagem/dann5.jpg">
    <div class="card-body">
      <h4 class="card-title">A Rave de Sucesso</h4>
      <h6 class="card-subtitle mb-2 text-muted">Golden Night</h6>
      <p class="card-text">aki entra só a mensagem do evento</p>
      <a href="#" class="card-link">entrar</a>

      <a href="#" class="card-link">Ler mais</a>

    </div>

  </div>

</div>
<div class="col-sm-6 col-md-4">

 <div class="card mb-5">

  <img class="card-img-top" src="imagem/dann6.jpg">
  <div class="card-body">
    <h4 class="card-title">O Melhor do Sertanejo</h4>
    <h6 class="card-subtitle mb-2 text-muted">Capital 922 ibuí</h6>
    <p class="card-text">aki entra só a mensagem do evento</p>
    <a href="#" class="card-link">entrar</a>
    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Ler mais</a>
  </div>

</div>
</div>
</div>     
</div>

<!-- Aki no caso eu faria a divisao do corpo fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff -->


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center text-dark">
      <h1 class="display-4"><i class="fa fa-video-camera text-primary" aria-hidden="true"></i>Demonstração
      das melhores BALADAS !</h1>
      <p class="lead"> A sua maior diversão está aqui </p>
      <hr>

    </div>
  </div>

  <div class="row">
    <div class="col-12">

     <ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist">

      <li class="nav-item">
        <a class="nav-link active"  id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Capital 922</a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Fhautalí</a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Chypsunder</a>
      </li>

    </ul>

    <div class="tab-content" id="nav-pills-content">

      <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
        <div class="row">
          <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/OPjXRda0B9w?rel=0&amp;showinfo=0" class="embed-responsive-item"></iframe>
            </div>
          </div>
          <div class="col-sm-6">
            <ul class="nav nav-pills mb-3" id="pills-tab-ul" role="tablist">
              <li><p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.  every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p></li>
            </ul>
            
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
        <div class="row">
          <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/356zdSQRNA8" class="embed-responsive-item"></iframe>
            </div>
          </div>
          <div class="col-sm-6">
            <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
        <div class="row">
          <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/356zdSQRNA8" class="embed-responsive-item"></iframe>
            </div>
          </div>
          <div class="col-sm-6">
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

</div>
</div>

<div class="container">

  <div class="row">

    <div class="col-12 text-center text-light">

      <h1 class="display-4"><i class="fa fa-align-justify text-light"></i> Pesquisa da Balada</h1>

    </div>

  </div>
  <div class="row justify-content-center mb-5">

    <div class="col-sm-12 col-md-10 col-lg-8">
      <form>
        <div class="form-row justify-content-center">
          <div class="form-group col-sm-8">
            <div class="form-check">

              <label for="inputBebida" class="form-check-label text-light">
                <input type="radio" name="fOlario" class="form-check-input" 
                id="inputBebida" checked> Vamos de mais 'Open Bar'
              </label>
            </div>
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-8">
            <div class="form-check">

              <label for="inputMulher" class="form-check-label text-light">
                <input type="radio" name="fOlario" class="form-check-input" 
                id="inputMulher">Uma baladinha 'Anos 80'
              </label>
            </div>
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-8">
            <div class="form-check">

              <label for="inputMulher" class="form-check-label text-light">
                <input type="radio" name="fOlario" class="form-check-input" 
                id="inputMulher">Quem quer mais 'Sertanejo Universitário'
              </label>
            </div>
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-8">
            <div class="form-check">

              <label for="inputMulher" class="form-check-label text-light">
                <input type="radio" name="fOlario" class="form-check-input" 
                id="inputMulher">Por mais modão 'Sertanejo'
              </label>
            </div>
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-8">
            <div class="form-check">

              <label class="form-check-label text-light" for="musicaFunk">
                <input type="radio" class="form-check-input " id="musicaFunk" name="fOlario">
                Por mais tempo com 'Funk'
              </label>
            </div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class=" col-sm-8">
            <button type="submit" class="btn btn-primary">Votar</button>
            <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Ajuda..." data-content="Uma forma voltada para ajudar as organizações de eventos que busca saber qual gosto possui os baladeiros do brasil">
             <i class="fa fa-question-circle"></i>
           </a>        
         </div>
       </div>     
     </form>
   </div>

 </div>

 <div class="row mb-3 text-light">

  <div class="col-12" ><hr></div>  

  <div class="col-sm-4  text-light">
    <h3 style="text-align: center">Eventos</h3>
    <p>Um site desenvolvido para auxiliar usuários que frequentam baladas por esse Brasil a fora com o intuito de economizar tempo por procurar baladas ou afazeres nos finais de semana e feriado</p>
    <p>Vamos lá e desfrutem do site!</p>
  </div>

  <div class="col-sm-4 text-center text-light">

    <h3>Menu</h3>

    <div class="list-group text-center">
      <a href="#" class="btn btn-outline-light" list-group-item-action >Perfil</a>
      <a href="#" class="btn btn-outline-light" list-group-item-action >Serviços</a>
      <a href="#" class="btn btn-outline-light" list-group-item-action >Depoimentos</a>
      <a href="#" class="btn btn-outline-light" list-group-item-action >Contatos</a>

    </div>

  </div>

  <div class="col-sm-4 text-center text-primary">

    <h3>Social</h3>
    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
      <a href="#" class="btn btn-outline-primary"><i class="fa fa-facebook-square"></i> Facebook</a>
      <a href="#" class="btn btn-outline-info"><i class="fa fa-twitter-square"></i> Twitter</a>
      <a href="#" class="btn btn-outline-warning"><i class="fa fa-instagram"></i> Instagram</a>

    </div>

  </div>

  <div class="col-12 mt-5">
    <blockquote class="blockquote text-center">
      <p class="mb-0 text-light"> A vida é uma festa. Ou você se diverte, ou você dança. </p>
      <footer class="blockquote-footer text-light">Autor Desconhecido</footer>
    </blockquote>

  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Labama</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>texto ou imagem</p>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
  $(function(){
    $('[data-toggle="popover"]').popover()
  })
</script>
</body>
</html>
