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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css" integrity="sha256-qaS6Cn77YhfgOLFHy4qadvrn/cEYG9bvbnQILtSY+0E=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css" integrity="sha256-wfbbsQFYKnizQi/WLPXS3wVDu0Dpi2yUQpZBDsb2H1s=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/css/nav.css">
  <link rel="stylesheet" href="css/css/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inter Eventos</title>
</head>
<body style="background: #212529;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div>
					<form class="form-container" method="POST" action="valida.php">
						<div class="form-group">
						  <label for="email">Email</label>
						  <input type="email" name="email" class="form-control" id="email" placeholder="Informar aqui seu email">
						</div>
						<div class="form-group">
							<label for="senha">Senha</label>
							<input type="password" name="senha" class="form-control" id="password1" placeholder="Adicionar senha">
						</div>
						<div class="checkbox" name="notifi" id="notifi">
						  <label for="notifi">
							<input type="checkbox"> Receber notificações
						  </label>
						</div>
						<button type="submit" class="btn  btn-dark btn-block">Entrar</button>
						<button type="submit" class="btn btn-dark btn-block" onclick="history.go(-1)">Cancelar</button><br/>
						<a href="cadastro.php" class=" text-light">Não é Cadastrado ?clique aqui</a><br/>
							<a href="index.php" class="text-light">Quer voltar para o Início Clique aqui </a>
					</form>
				</div>
			</div>
		</div>
	</div>

			
    </body>
</html>
