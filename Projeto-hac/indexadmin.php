<?php
include 'config.php';

$tableLivro = "SELECT * FROM livro";
$tableAluno = "SELECT * FROM aluno";
$tableBibliotecario = "SELECT * FROM bibliotecario";
$resultado1 = $conn->query($tableLivro);
$resultado2 = $conn->query($tableAluno);
$resultado3 = $conn->query($tableBibliotecario);

$livros = []; // Array para armazenar os resultados

if ($resultado1->num_rows > 0) {
    while ($row = $resultado1->fetch_assoc()) {
        $livros[] = $row;
    }
} 
else {
    $livros = null;
}
if ($resultado2->num_rows > 0) {
    while ($row = $resultado2->fetch_assoc()) {
        $alunos[] = $row;
    }
} else {
    $alunos = null;
}
if ($resultado3->num_rows > 0) {
    while ($row = $resultado3->fetch_assoc()) {
        $bibliotecarios[] = $row;
    }
} else {
    $bibliotecarios = null;
}
$conn->close();
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
            padding: 3.8vh;
            text-align: center;
        }
        .a{
            text-decoration: none;
            color: white;
            border: solid 7px transparent;
            padding: 3px;
        }
        a:hover{
            background-color:rgb(75, 138, 123);
        }
        .logo{
            background-color: #58af9b;
            height: 19.9vh;  
            color: #fff;
        }
        img{
            size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="logo">
        <h1>Modo Bibliotecário</h1>
        <a class="a" href="singin.php">Novo usuário</a>
        <a class="a" href="newbook.php">Novo livro</a>
        <a class="a" href="database.php">visualizar base de dados</a>
        <a class="a" href="alter.php">Alterar base de dados</a>
    </div>
    <img src="img/IMG_1292.JPG" alt="">
</body>
</html>