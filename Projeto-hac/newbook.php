<?php
if(isset($_POST['registar']))
{
    include('config.php');
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $disciplina = $_POST['disciplina'];
    $classe = $_POST['classe'];
    $autor = $_POST['autor'];

    $result = mysqli_query($conn, "INSERT INTO livro(nome,categoria,disciplina,classe,autor) VALUES ('$nome','$categoria','$disciplina','$classe','$autor')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Mode</title>
    <link rel="config.php" href="config.php">
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
            color: white;
        }
        a{
            text-decoration: none;
        }
        .form {
            width: 40vw;
            height: 40vh;
        }
        .form-input {
            border: none;
            background-color: #ecf0f1;
            line-height: 10px; 
        }
        input {
            padding: 5px;
            width: 28vw;
            margin: auto 70px ;
            margin-bottom: 4px;
        }
        .conteiner{
            position: relative;
        }
        .logo{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate( -50%, -50%);
            background-color: #58af9b;
            border-radius: 12px;
        }
        .btn {
            color: #fff;
            font-size: 14px;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            width: 29vw;
            display:block;
            align-self: center;
        }
        .btn-primary {
            background-color: transparent;
            border: 1px solid #fff;  
        }
        .btn-primary:hover {
            background-color: #fff;
            color: #58af9b;
        }
    </style> 
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Biblioteca Digital Hac</h1>
            <form class="form" action="newbook.php" method="POST" >
                <input type="text" name="nome" placeholder="Tílulo" required>
                <br>
                <input type="text" name="categoria" placeholder="Categoria" required>
                <br>
                <input type="text" name="disciplina" placeholder="Disciplina" required>
                <br>
                <input type="text" name="classe" placeholder="Classe" required>
                <br>
                <input type="text" name="autor" placeholder="Autor" required>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Registar">
            </form>
        </div>
    </div>
</body>
</html>