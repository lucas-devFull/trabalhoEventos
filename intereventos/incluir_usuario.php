<?php
        require 'init.php';
        $nome = isset($_POST['nome']) ? $_POST['nome']: '';
        $email = isset($_POST['email']) ? $_POST['email']: '';
        $senha = isset($_POST['senha']) ? $_POST['senha']: '';

        //checando campo vazio
        if(empty($nome) || empty($email) || empty($senha)){
           echo " <script type=\"text/javascript\">
            alert(\"Não é permitido campo vazio\");</script>";
            exit;
        }
        $PDO = db_connect();
        $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam('nome', $nome);
        $stmt->bindParam('email', $email);
        $stmt->bindParam('senha', $senha);

        if($stmt->execute()){
            echo true;
            header('Location: index.php');
        }else{
            echo false;
        }

        mysqli_close($conn);
?>
