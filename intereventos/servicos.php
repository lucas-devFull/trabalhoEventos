<?php
session_start();
// echo($_SESSION['logged_in'] == true ?"logado" : "deslogado");
// echo($_SESSION['admin']);
require_once 'init.php';
require_once 'check.php';
// require_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="imagem/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css" integrity="sha256-qaS6Cn77YhfgOLFHy4qadvrn/cEYG9bvbnQILtSY+0E=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css" integrity="sha256-wfbbsQFYKnizQi/WLPXS3wVDu0Dpi2yUQpZBDsb2H1s=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/css/nav.css">
  <link rel="stylesheet" href="css/css/style.css">
  <link href='smartmenus-1.1.0/css/sm-core-css.css' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="smartmenus-1.1.0/css/sm-clean/sm-clean.css">
  <link rel="stylesheet" href="css/css/nav2.css">
  <link rel="stylesheet" href="css/css/servicos.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inter Eventos</title>
</head>
<body style="background: #212529;">
    <div class="fundo-logo">
        <?php require 'nav.php'?>
    </div>

        
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/trabalhoEventos/intereventos/imagem/servico-carrosel1.jpg" alt="First slide">
                <div class="tetx-carrosel">
                    <h3>Organização das melhores baladas do brasil</h5>
                    <p>Se você quiser organizar as melhores baladas igual a essas venha conhecer nosso serviços</p>
                    <button class="mt-3 btn btn-dark">Acessar</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/trabalhoEventos/intereventos/imagem/servico-carrosel2.jpg" alt="Second slide">
                <div class="tetx-carrosel">
                    <h3>Organização das melhores baladas do brasil</h5>
                    <p>Se você quiser organizar as melhores baladas igual a essas venha conhecer nosso serviços</p>
                    <button class="mt-3 btn btn-dark">Acessar</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/trabalhoEventos/intereventos/imagem/servico-carrosel4.jpg" alt="Third slide">
                <div class="tetx-carrosel">
                    <h3>Organização das melhores baladas do brasil</h5>
                    <p>Se você quiser organizar as melhores baladas igual a essas venha conhecer nosso serviços</p>
                    <button class="mt-3 btn btn-dark">Acessar</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="slogan parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="slogan white text-center">
                        <h3><i class="flaticon-trophy"></i><span class="slogan-number">10</span>anos de Experiencia em Organização de eventos</h3>
                    </div>
                </div>
                <div class="col-md-3" style="display: flex;justify-content: center;align-items: center;">
                    <a href="#" class="btn btn-primary black" >Saia mais.</a>
                </div>
            </div>
        </div>
    </section>



    <section class="pad-t80 pad-b50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fab fa-angrycreative"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">ANGRY CREATIVE</h3>
                                </a>
                                <p>Aqui encontrará as melhor bebida das baladas, onde sua cabeça vai girar até não aguentar mais.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fas fa-american-sign-language-interpreting"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">GRUPO DIFERENCIADOS</h3>
                                </a>
                                <p>Aqui não tem fescura não, se pedir os caras liberam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fas fa-address-card"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Festas autorizadas pelo governo.</h3>
                                </a>
                                <p>Garantimos festas onde os participantes estejam verificados e autorizados, para não ocorrer nenhum desentendimento entre as pessoas e nenhum terrorismo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fab fa-accessible-icon"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Festas para deficientes.</h3>
                                </a>
                                <p>Gostamos de englobar a todos, festam preparadas para deficientes de todos tipos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fas fa-bath"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Limpeza garantida.</h3>
                                </a>
                                <p>Providenciamos sempre banheiros quimocos com chuveiros nas entardas das festas caso alguem queira tomar aquela duxa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fas fa-blender"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Café</h3>
                                </a>
                                <p>A partir das 3h da manha, distribuimos cafés pra galera aguentar até o amanhecer nas festas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fas fa-car-side"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Ubers</h3>
                                </a>
                                <p>Seremos ubers disponiveis para levar e buscar nas festas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="feature-icon text-center">
                                <i class="fab fa-cc-amazon-pay"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="media-heading">Bares com descostos</h3>
                                </a>
                                <p>Caso você tenha cartao do Paypal, recebera descontos de ate 10% nos nossos estabelecimentos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="pad-t80 pad-b50" style="background-color: #212529; position: relative;color:white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-title left">
                        <h3>Sobre nós</h3>
                    </div>
                    <p style="font-size:20px">Nós somos organizadores de eventos responsável por toda a produção de um determinado evento. Nós cuidamos do planejamento do evento, estrutura, fornecedores, atrações, programação, staff, alimentos e logística.

                    Assim ele se torna o responsável por tirar uma ideia do papel e colocá-la em movimento por meio da execução do evento em si.

                    Além de orientar, produzir, gerenciar e acompanhar os resultados obtidos, Noss lei é sempre garantir a satisfação e segurança do seu público e empresa cliente mediante um evento de qualidade.</p>
                    <div class="feature-list" style="margin-top: 40px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-2">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="feature-icon text-center">
                                                <i class="flaticon-security"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h3 class="media-heading">Mercado</h3>
                                            </a>
                                            <p>Estamos no mercado a mais de 10 anos e com 20 menbros na equipe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-2">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="feature-icon text-center">
                                                <i class="flaticon-bookshelf"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h3 class="media-heading">Alcance</h3>
                                            </a>
                                            <p>Estamos atenddendo clientes a todo o pais.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="left-half width50 parallax" style="filter:opacity(0.5);background-image: url(/trabalhoEventos/intereventos/imagem/sobre-nos.png);">
            
        </div>
    </section>


    <section class="pad-t80 pad-b50" style="background-color: #212529;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="animated-counter shadow text-center">
                                <div class="animated-number" data-from="0" data-to="300">$300</div>
                                <h4>Open<br> Bar</h4>
                                <button class="btn btn-primary black comprar">Comprar</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="animated-counter shadow text-center">
                                <div class="animated-number" data-from="0" data-to="800">$800</div>
                                <h4>Baladas<br> Biffe</h4>
                                <button class="btn btn-primary black comprar">Comprar</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="animated-counter shadow text-center">
                                <div class="animated-number" data-from="0" data-to="1500">$1500</div>
                                <h4>Baldas + Biffe<br> Transpot + Chuveiros</h4>
                                <button class="btn btn-primary black comprar">Comprar</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="animated-counter shadow text-center">
                                <div class="animated-number" data-from="0" data-to="100">$100</div>
                                <h4>Deficientes<br> Suporte Total</h4>
                                <button class="btn btn-primary black comprar">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








   
    <?php require "footer.php" ?>

</body>

</html>