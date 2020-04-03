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

  </div>

  <div class="container"  align="center">

      <div class="row ">
    <div class="col-12 text-center mt-3">


      <h1 class="display-3 text-light"><i class="fa fa-comments text-light" ></i> Forum de Avisos</h1>
      <p class="lead text-light">Bem Vindo à Comunidade</p>
      <p> <?php echo $_SESSION['username']; ?> | <a href="logout.php">Sair</a></p>
    </div>
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

</div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
  $(function(){
    $('[data-toggle="popover"]').popover();  });
  </script>
    </body>
</html>
