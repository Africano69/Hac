<?php
// Configurações de conexão com a base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['query'])) {
    $search = $conn->real_escape_string($_POST['query']);
    $sql = "SELECT nome FROM livro WHERE nome LIKE '%$search%'";
    $result = $conn->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['nome'];
    }

    echo json_encode($data);
}
?>
