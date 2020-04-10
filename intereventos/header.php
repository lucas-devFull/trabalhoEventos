<?php
include_once("conexao.php");
require 'init.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="imagem/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="css/css/nav.css">
  <link rel="stylesheet" href="css/css/style.css">
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
  </div>