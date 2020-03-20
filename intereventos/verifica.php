	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

if(!isset($_SESSION["username"]))
{
 header("Location: login.php"); 
exit; 
} 
?>
</body>
</html>
 <?php
        require_once "verifica.php";
        include_once("conexao.php");
        echo "<h1 class=' display-3 text-light' >" . $_SESSION["username"] . "<h><br/>";
        ?>

        <?php session_destroy(); ?>