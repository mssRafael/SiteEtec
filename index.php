<?php include "includes/navbar_index2.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

    <style> 

        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap'); /* font roboto */
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            padding-top: 62px;
        }

        .left-color {
            background: linear-gradient(to right, blue, purple);
            width: 40%;
            height: 100%;
            position: fixed;
            color: white;
            text-align: center;
            padding: 20px;
            border-right: 2px solid lightgray;
            box-shadow: inset 5px 3px 10px lightgray;

        }

        .left-color .title strong {
            color: red;
            font-family: serif;
        }

        .left-color .title h2 {
            font-size: 50px;
        }

        .text {
            display: flex;
            flex-direction: column;
        }

        .text strong {
            padding-top: 50px;
            font-size: 20px;
            border-bottom: 2px solid gray;
            padding-bottom: 10px;
        }

        .img-demo img {
            border-radius: 50%;
            padding: 50px;
        }

       .right-form {
            margin-left: 40%;
            text-align: center;
            padding-top: 62px;
            width: 60%;
            height: 100%;
            position: fixed;
       } 

       .right-form a {
           height: 120px;
           border: solid lightgray 1px;
           box-shadow: inset 2px 2px 13px black; 
           background: linear-gradient(to right, blue, purple);
           color: white; 
           font-size: 40px;
           padding: 20px;
       }

       .btn-registrar a, .btn-logar a {
           text-decoration: none;
           height: 120px;
           border: solid lightgray 1px;
           box-shadow: inset 2px 2px 13px black; 
           background: linear-gradient(to right, blue, purple);
           color: white; 
           font-size: 40px;
           padding: 20px;

       }

       .description-registrar {
            color: darkgray;
            font-size: 18px;
            font-family: Roboto;
            padding-bottom: 20px;
            text-decoration: underline;
        }

    </style>    
</head>
<body>
<section class="main">
        <section class="left-color">
            <div class="title">
                <h2><strong>Olá</strong>, Seja Bem Vindo ao site TechShop</h2> 
            </div>
            <div class="text">
                <strong>Quer pular esta etapa?</strong>
                <strong>Clique nesse ícone na barra de navegacão:</strong>
                <div class="img-demo"><img src="assets_all\icon_pular-exemp.PNG"></div>
            </div>
        </section>
        <section class="right-form">
            <div class="btn-registrar">
                <div class="description-registrar">Usuário novo?</div>
                <a href="forms/form_registrar.php">Quero me registrar</a>    
            </div>
            <div class="btn-logar">
                <div class="description-logar"></div>
                <a href="forms/form_logar.php">Quero me logar</a>
            </div>
        </section>
    </section>
</body>
</html>