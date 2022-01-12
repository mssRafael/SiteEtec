<?php

	$servidorconexao="localhost";
    $usuarioconexao="root";
    $senhaconexao="";
    $bancodedados="techshop";
    $conexao=mysqli_connect($servidorconexao, $usuarioconexao, $senhaconexao, $bancodedados) or die (mysql_error());

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

    //criptografia senha 

    $senha = sha1($senha);

    //fim da criptografia

    $sql = "select * from usuarios where nome = '$nome' and senha = '$senha'";
    $scanuser = mysqli_query($conexao, $sql) or die (mysql_error());
    $registro = mysqli_num_rows($scanuser);
    
        if ($registro == 0) {
            echo("<h3><strong>Usuário não encontrado.</strong></h3>");
            header("location: forms\form_logar.php"); //REVISAR O CAMINHO
        }else {
            $dados = mysqli_fetch_array($scanuser); 
            session_start();
            
            $_SESSION ['idUser'] = $dados ['idUser'];
            $_SESSION ['nome'] = $dados ['nome'];
            $_SESSION ['senha'] = $dados ['senha'];
            $_SESSION ['log'] = 'on';
            header("location: home_page\home.php"); //REVISAR O CAMINHO /AREA RESTRITA = HOMEPAGE NORMAL
        }

    ?>