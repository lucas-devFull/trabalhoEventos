  <?php
  require_once("conexao.php");
  require 'init.php';
  $email = isset($_POST['email']) ? $_POST['email']: '';
  $senha = isset($_POST['senha']) ? $_POST['senha']:'';

  if(empty($email) || empty($senha)){
    echo json_encode(array("status" => false));
  }else{
    $PDO = db_connect();
    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('email', $email);
    $stmt->bindParam('senha', $senha);

    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($users)<=0){
      echo json_encode(array("status" => false));
    }else{  
      $user = $users[0];
      session_start();
      $_SESSION['logged_in']= true;
      $_SESSION['user_id']=$user['codigo'];
      $_SESSION['username'] = $user['nome'];
      $_SESSION['admin'] = $user['admin'];
      echo json_encode(array("status" => true));
    }
  }
?>