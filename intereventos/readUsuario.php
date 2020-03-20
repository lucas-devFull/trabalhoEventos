<?php
require_once 'init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM usuario ORDER BY nome ASC";
 
// SQL para selecionar os registros
$sql = "SELECT codigo, nome, email FROM usuario ORDER BY nome ASC";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Inter Eventos</title>
    </head>
 
    <body>
         
        <h1>Inter eventos Remoção de usuario</h1>
         
        <p><a href="cadastro.php">Cadastrar usuario</a></p>
 
        <h2>Lista de Usuários</h2>
 
        <p>Total de usuários: <?php echo $total ?></p>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['codigo'] ?></td>
                    <td><?php echo $user['nome'] ?></td>
                    <td><?php echo $user['email'] ?></td>

                    <td>
                        <a href="alterUsuario.php?codigo=<?php echo $user['codigo'] ?>">Editar</a>
                        <a href="delete.php?codigo=<?php echo $user['codigo'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum usuário registrado</p>
 
        <?php endif; ?>
    </body>
</html>