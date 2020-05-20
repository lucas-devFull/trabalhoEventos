<?php
include_once("conexao.php");
require 'init.php';
session_start();
echo($_SESSION['logged_in'] == true ?"logado" : "deslogado");
echo($_SESSION['admin']);
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
  <link rel="stylesheet" href="css/css/forum.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inter Eventos</title>
</head>
<body style="background: #212529;">
  <div class="fundo-logo">
    <div>
      <div class="d-flex justify-content-center p-3">
        <a href="index.php" class="text-center">
          <img src="imagem/slidePronto.jpg" width="50%" class="img img-responsive" alt="Inter Eventos" >
        </a>
      </div>
    </div>
    <hr class="bg-light" style="width:75%;">
    <?php require 'nav.php'?>

    <!-- <button id="get"> get </button> -->
  </div>