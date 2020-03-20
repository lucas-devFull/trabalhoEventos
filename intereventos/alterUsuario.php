<?php
require 'init.php';
 
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
 
// valida o ID
if (empty($codigo))
{
    echo "ID para alteração não definido";
    exit;
}
// busca os dados du usuário a ser editado
$PDO = db_connect();
$sql = "SELECT * FROM usuario WHERE codigo = '$codigo' ";
$stmt = $PDO->prepare($sql);
$stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
 
$stmt->execute();
 
$user = $stmt->fetch(PDO::FETCH_ASSOC);
 
// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido
if (!is_array($user))
{
    echo "Nenhum usuário encontrado";
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Edição de Usuário</title>
    </head>
 
    <body>
 
        <h1>Inter Eventos</h1>
 
        <h2>Edição de Usuário</h2>
         
        <form action="edit.php" method="POST">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo $user['nome'] ?>">
 
            <br><br>
 
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo $user['email'] ?>">
 
            
 
            <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>