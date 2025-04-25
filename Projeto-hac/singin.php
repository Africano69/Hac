<?php
if(isset($_POST['cadastrar']))
{
    include('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $codigo = $_POST['codAluno'];
    if ($codigo == 2009)
    {
        $result = mysqli_query($conn, "INSERT INTO usuario(nome,email,senha) VALUES ('$nome','$email','$senha')");
        header('Location: login.html');
    }
    elseif ($codigo == "Administr@dor") {
        $result = mysqli_query($conn, "INSERT INTO bibliotecario(nome,email,senha) VALUES ('$nome','$email','$senha')");
        header('Location: login.html');
    }
    else {
        print_r ("Código de aluno inválido! Dirija-se a biblioteca da instituição para obter o código.");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing in</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            min-width: 100vw;
            background-color: #ecf0f1;
        }
        .content
        {
            background-color: #fff;
            border-radius: 15px;
            width: 80%;
            height: 60%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .content::before
        {
            content: "";
            position: absolute;
            background-color: #58af9b;
            width: 45%;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }
        .first-content 
        {
            display: flex;
        }
        .first-column
        {
            text-align: center;
            flex: 1 0 auto;
            z-index: 10;
            width: 40%;
        }
        .title
        {
            font-size: 28px;
            font-weight: bold;
            text-transform: capitalize;
        }
        .title-primary
        {
            color: #fff;
        }
        .discription
        {
            font-size: 16px;
            font-weight: 300;
            line-height: 30px;
            align-self: center;
        }
        .discription-primary
        {
            color: #fff;
        }
        .discription-second
        {
            color: #7f8c8d;
        }
        .title-second
        {
            color: #58af9b;
        }
        .btn
        {
            border-radius: 15px;
            color: #fff;
            font-size: 14px;
            padding: 10px 50px;
            cursor: pointer;
            font-weight: bold;
            width: 200px;
            padding: 8px;
            border-width: 0px;
            align-self: center;
        }
        .btn-primary
        {
            background-color: transparent;
            border: 1px solid #fff;
            
        }
        .btn-primary:hover
        {
            background-color: #fff;
            color: #58af9b;
        }
        .btn-second
        {
            background-color: #58af9b;
            border: 1px solid #58af9b;
        }
        .btn-second:hover
        {
            background-color: #fff;
            border: 1px solid #58af9b;
            color: #58af9b;
        }

        .second-column
        {
            flex: 2 0 auto;
            display: flex;
            flex-direction:column;
            align-items: center;
            width: 40%;
        }
        .form
        {
            display: flex;
            flex-direction: column;
            width: 120%;
            align-items: center;
        }
        .form-input
        {
            height: 45px;
            border: none;
            background-color: #ecf0f1;
            line-height: 10px;  
        }
        input
        {
            padding: 5px;
            width: 190px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary  "> seja bem-vindo a biblioteca!</h2>
                <p class="discription discription-primary  ">  Clique no botão Iniciar sessão, caso tenha uma conta criada </p>
                <a href="login.html" ><input class ="btn btn-primary" type="button" value="Iniciar sessão"></a>
            </div>
            <div class="second-column">
                <h2 class="title title-second ">Criar conta</h2>
                
                <p class="description discription-second ">Por favor, insira os seus dados pessoais</p>
               
                <form action="singin.php" method="POST">
                    <div class="form">
                        <input type="text"  name="nome" placeholder="Nome" required>
                        <input type="email" name="email"  placeholder="E-mail" required>
                        <input type="password" name="senha" placeholder="Senha" required>
                        <abbr title="Este código serve para verificar a sua identidade de aluno ou professor"><input type="password" name="codAluno" placeholder="Código de secreto" required></abbr>
                        <input class= "btn btn-second" type="submit" name="cadastrar" value="Cadastrar">
                    </div> 
                </form>
                
            </div>
        </div>
       
    </div>
    
</body>
</html>