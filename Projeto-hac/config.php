<?php
// Arquivo de conexão com o banco de dados
$servidor = 'Localhost';
$usuario = 'root';
$senha = '';
$baseDados = 'hac';

$conn = new mysqli($servidor, $usuario, $senha, $baseDados);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhada: " . $conn->connect_error);
}

?>


