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
                <?php if (($livro['nome'] == "Base de Dados e Redes de Computadores") && ($livro['classe'] == "10ª")){ ?>
                    <tr>
                        <td><a href="Livros/BDRC 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></td>
                        <td><?php echo $livro['disciplina']; ?></td>
                        <td><?php echo $livro['classe']; ?></td>
                        <td><?php echo $livro['autor']; ?></td>
                    </tr>
        
                    <?php } ?>

                    <?php if (($livro['nome'] == "Formação de Atitudes Integradoras")  && ($livro['classe'] == "10ª/11ª")){ ?>
                        <tr>
                            <td><a href="Livros/FAI 10ª,11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                        
                    <?php } ?>

                    <?php if (($livro['nome'] == "Língua Portuguesa") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><a href="Livros/Língua Portuguesa 10ª - 1_compressed.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                        
                    <?php } ?>

                    <?php if (($livro['nome'] == "Técnicas e Linguagens de Programação") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><a href="Livros/TLP 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                       
                    <?php } ?>

                    <?php if (($livro['nome'] == "Organização e Administração de Empresas") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><a href="Livros/OAE 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                       
                    <?php } ?>

                    <?php if (($livro['nome'] == "Língua Portuguesa") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><a href="Livros/LP-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                     
                    <?php } ?>

                    <?php if (($livro['nome'] == "Organização e Administração de Empresas") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><a href="Livros/OAE-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                      
                    <?php } ?>

                    <?php if (($livro['nome'] == "Técnicas e Linguagens de Programação") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><a href="Livros/TLP-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                      
                    <?php } ?>
                <?php endforeach; ?>
            </tbody>
        </table>
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
                    <a href="newbook.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
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
                    <a href="newbook.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>