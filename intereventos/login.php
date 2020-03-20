<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
            <link rel="stylesheet" href="css/css/login.css">
            <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
            
        <title>Login</title>
    </head>
    <body>
        <div class="container-fluid bg">
		<div class="row">
			<div class="col-m4 col-sm-4 col-xs-12"></div>
			<div class="col-m4 col-sm-4 col-xs-12">
				<!-- começo form -->
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
			  <a href="#" class=" text-light" > Esqueceu a senha ?</a><br/>
			  <a href="cadastro.php" class=" text-light">Não é Cadastrado ?clique aqui</a><br/>
                          <a href="index.php" class="text-light">Quer voltar para o Início Clique aqui</a>
                              
			</form>
					<!--fim form -->
			</div>
			<div class="col-m4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
    </body>
</html>
