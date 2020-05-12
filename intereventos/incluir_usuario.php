<?php
        require 'init.php';
        $nome = isset($_POST['nome']) ? $_POST['nome']: '';
        $email = isset($_POST['email']) ? $_POST['email']: '';
        $senha = isset($_POST['senha']) ? $_POST['senha']: '';

        if(empty($nome) || empty($email) || empty($senha)){
            echo json_encode(array("status" => false));
        }else{
            $PDO = db_connect();
            $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam('nome', $nome);
            $stmt->bindParam('email', $email);
            $stmt->bindParam('senha', $senha);
            $result = $stmt->execute();
            if($result){
                echo json_encode(array("status" => true));
            }else{
                echo json_encode(array("status" => false));
            }
        }

        // mysqli_close($conn);
?>
