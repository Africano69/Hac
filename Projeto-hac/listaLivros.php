<?php
include 'config.php';

$sql = "SELECT * FROM livro";
$resultado = $conn->query($sql);

$livros = []; // Array para armazenar os resultados

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $livros[] = $row;
    }
} else {
    $livros = null;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, p{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }body{
            background-image: linear-gradient( #58af9b, rgb(21, 51, 44))
        }
        h1{
            font-size: 40px;
            padding: 3.8vh;
            text-align: center;
        }
        h2{
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

    </style>
</head>
<body>
    <h1>Lista de Livros</h1>
    <p>Clique no título do livro que pretende visualizar ou adquirir</p>
    <?php if ($livros): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Disciplina</th>
                    <th>Classe</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>

                    <?php if (($livro['nome'] == "Base de Dados e Redes de Computadores") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/BDRC 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Formação de Atitudes Integradoras")  && ($livro['classe'] == "10ª/11ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/FAI 10ª,11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Língua Portuguesa") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/Língua Portuguesa 10ª - 1_compressed.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Técnicas e Linguagens de Programação") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/TLP 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Organização e Administração de Empresas") && ($livro['classe'] == "10ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/OAE 10ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Língua Portuguesa") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/LP-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Organização e Administração de Empresas") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/OAE-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
                            <td><?php echo $livro['disciplina']; ?></td>
                            <td><?php echo $livro['classe']; ?></td>
                            <td><?php echo $livro['autor']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php if (($livro['nome'] == "Técnicas e Linguagens de Programação") && ($livro['classe'] == "11ª")){ ?>
                        <tr>
                            <td><?php echo $livro['idlivro']; ?></td>
                            <td><a href="Livros/TLP-11ª - 1.pdf"><?php echo $livro['nome']; ?></a></a> </td>
                            <td><?php echo $livro['categoria']; ?></td>
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
    <?php endif; ?>
</body>
</html>
 