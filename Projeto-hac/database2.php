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
        body{
            background-image: linear-gradient( #58af9b, rgb(21, 51, 44))
        }
        h1{
            font-size: 40px;
            padding: 3.8vh;
            text-align: center;
        }
        h2, thead{
            text-align: center;
        }
        a{
            color: white;
        }
        .a{
            text-decoration: none;
            color: white;
            border: solid 7px transparent;
            padding: 3px;
        }
        a:hover{
            background-color:rgb(22, 77, 65);
        }
        td{
            width: 25vw;
        }
        table, th, td {
            color: white;
            background-color:rgb(46, 114, 98);
            border: 1px solid #fff;
            padding: 4px;
        }
        th{
            background-color:rgb(28, 53, 47);
        }
        table {
            width: 96%;
            border-collapse: collapse;
        }
        img{
            width: 10px;
            height: 10px;
            display: flex;
        }
    </style>
</head>
<?php if ($livros): ?>
    <h2>Livros</h2>
    <?php foreach ($livros as $livro): ?>
        <table>
            <thead>
                <tr>
                    <th colspan="4">categoria</th>
                </tr>
                <tr>
                    <td colspan="4"><?php echo $livro['categoria']; ?></td>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>Disciplina</th>
                    <th>Classe</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="Livros/TLP-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                    <td><?php echo $livro['disciplina']; ?></td>
                    <td><?php echo $livro['classe']; ?></td>
                    <td><?php echo $livro['autor']; ?></td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
<?php else: ?>
    <p>Nenhum resultado encontrado.</p>
<?php endif; ?><br><br>

    <?php if ($alunos): ?>
        <h2>Alunos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?php echo $aluno['idaluno']; ?></td>
                        <td><?php echo $aluno['nome']; ?></td>
                        <td><?php echo $aluno['email']; ?></td>
                        <td><?php echo $aluno['senha']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?><br><br>

    <?php if ($bibliotecarios): ?>
        <h2>Bibliotecários</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bibliotecarios as $bibliotecario): ?>
                    <tr>
                        <td><?php echo $bibliotecario['idAdmin']; ?></td>
                        <td><?php echo $bibliotecario['nome']; ?></td>
                        <td><?php echo $bibliotecario['email']; ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>