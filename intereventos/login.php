<?php
include_once("conexao.php");
require 'init.php';
session_start();
?>
<!DOCTYPE html>
<html style="height:100%;">
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
	  <link rel="stylesheet" href="css/css/login.css">
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <title>Inter Eventos</title>
	</head>

	<body style="background: #212529; height:100%; background-image: url(imagem/fundo_login.jpg);background-size: contain;">
		<div class="container h-100">
			<div class="row h-100" style="justify-content: flex-end;align-items: center;margin-left: 15em;">
				<div class="col-md-8" style="display: flex;height: 100%;justify-content: center; align-items: center;">
					<form class="form-container" method="POST" action="valida.php">
						<div class="titulo_login"> Login In </div>
						<div class="form-group">
							<label for="email" class='text-light'>Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Informar aqui seu email">
						</div>
						<div class="form-group">
							<label for="senha" class='text-light'>Senha</label>
							<input type="password" name="senha" class="form-control" id="password1" placeholder="Adicionar senha">
						</div>
						<button type="submit" class="btn btn-dark btn-block mt-5" style="margin-bottom:-2em;">Entrar</button>
						<div class='icon_home'>
							<a href="index.php"> <i class="fas fa-home"></i> </a>
						</div>
						<div class="text-right mt-2">
							<a href="cadastro.php" class=" text-light">Cadastre - se</a><br/>
						</div>
					</form>
				</div>
			</div>
		</div>			
	</body>
</html>
