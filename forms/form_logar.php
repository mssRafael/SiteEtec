<?php include "../includes/navbar_index.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Logar</title>
    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            padding-top: 62px; 
        }
    </style>
</head>
<body>
<section class="main">
        <div class="back">
            <form method="post" action="processamento/validarlogin.php">
                <div class="input-nome">
                    <input type="text" name="nome" placeholder="Seu nome...">
                </div>
                <div class="input-senha">
                    <input type="password" name="senha" placeholder="Sua senha...">
                </div>
                <div class="input-enviar">
                    <input type="submit" value="Entrar" >
                </div>
            </form>
        </div>
    </section>
</body>
</html>