  <?php
  require'init.php';
  $email = isset($_POST['email']) ? $_POST['email']: '';
  $senha = isset($_POST['senha']) ? $_POST['senha']:'';

  if(empty($email) || empty($senha)){
    echo "
  <script type=\"text/javascript\">
  alert(\"Dados não definidos.\");
  </script>
  "; 
  header('Location: login.php'); exit;

  }
  $PDO = db_connect();
  $sql = "SELECT codigo, nome FROM usuario WHERE email = '$email' and senha = '$senha' ";
  $stmt = $PDO->prepare($sql);
  $stmt -> bindParam('email', $email);
  $stmt -> bindParam('senha', $senha);

  $stmt->execute();

  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if(count($users)<=0){
 echo "
  <script type=\"text/javascript\">
  alert(\"Erro no Login tente novamente.\");
  </script>
  "; 
  header('Location: index.php');
  exit;
}  
  $user = $users[0];
  session_start();
  $_SESSION['Logged_in']= true;
  $_SESSION['user_id']=$user['codigo'];
  $_SESSION['username'] = $user['nome'];
   echo "
  <script type=\"text/javascript\">
  alert(\"Login efetuado com sucesso.\");
  </script>
  "; 
  header('Location: index.php');
   exit;

?>