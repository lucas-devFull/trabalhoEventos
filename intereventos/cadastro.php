<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link rel="stylesheet" href="css/css/cadastro.css">      
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
        <title>Cadastro</title>
    </head>
    <body>
        
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-m4 col-sm-4 col-xs-12"></div>
			<div class="col-m4 col-sm-4 col-xs-12">
				<!-- começo form -->
			<form class="form-container" method="POST" action="incluir_usuario.php">

			  <div class="form-group">
			    <label for="nome">Nome</label>
			    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informar aqui seu nome">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Informar aqui seu email">
			  </div>
			  <div class="form-group">
			  	<label for="senha">Senha</label>
			  	<input type="password" name="senha" class="form-control" id="senha" placeholder="Adicionar senha">
			  </div>
			  <button type="submit" class="btn  btn-dark btn-block">Cadastrar</button>
			  <button type="submit" class="btn btn-dark btn-block" onclick="history.go(-1)">Cancelar</button><br/>
			</form>
					<!--fim form -->
			</div>
			<div class="col-m4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
    </body>
</html>
