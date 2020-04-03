
<?php 
require_once 'init.php';
 
// resgata os valores do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
 
// validação (bem simples, mais uma vez)
if (empty($nome) || empty($email) ||($codigo))
{
    echo "Volte e preencha todos os campos";
    header('Location: alterUsuario');
    exit;
}

 
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
 
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE codigo = $codigo ";
$stmt = $PDO->prepare($sql);
$stmt->bindParam('nome', $nome);
$stmt->bindParam('email', $email);
$stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
 
if ($stmt->execute())
{
	echo "<script type=\"text/javascript\">
	alert('Edição efetuada com sucesso!');</script>";
    header('Location: readUsuario.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}