<?php 

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    $servidorconexao="localhost";
    $usuarioconexao="root";
    $senhaconexao="";
    $bancodedados="techshop";
    
    $conexao=mysqli_connect($servidorconexao, $usuarioconexao, $senhaconexao, $bancodedados) or die (mysql_error());

    $sql = "INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')";
    
    $cadastrar = mysqli_query ($conexao, $sql) or die (mysql_error());
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - TechShop</title>
</head>
<body>
</body>
</html>