<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset( $_SESSION['senha']);
    header('Location: login.html');
}
$iniciada = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="config.php" href="config.php">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            font-size: 40px;
            padding: 5vh;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #58af9b;
        }
        .logo{
            background-color: #58af9b;
            width: 100%;
            height: 20vh;  
            color: #fff;
            position: relative;
        }
        form{
            position: absolute;
            display: flex;
            align-items: center;
            margin-top: 4%;
            margin-left: 25vw;
        }
        input{
            width: 50vw;
            height: 35px;
            border: 0.3px solid #fff;
            border-radius: 50px;
            background-color: #fff;
            text-align: center;
        }
        .buttons{
            display: flex;
            align-items: center; 
        }
        .button{
            display: inline-block;
            padding: 5px;
            width: 95.4vw;
            height: 3.5vh;
            text-align: center;
        }
        .button:hover{
            background-color: #58af9b;
            color:#fff;
            border: 3px solid #fff;
        }
        img{
            size: cover;
            width: 100%;
            height: 68vh;
        }
    </style>
</head>
<body>
    <div class="logo">
        <h1>Biblioteca Digital Hac</h1>
    </div>
    <div class="buttons">
        <div><a class="button" href="listaLivros.php">Livros</a></div>
    </div>      
    <img src="img/IMG_2447.JPG" alt="img">
    <div class="buttons">        
    <div><a class="button" href="terminarsess.php">Sair</a></div>
    </div>         
</html>
