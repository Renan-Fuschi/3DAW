<?php
$servername = "localhost";
$username = "meu_usuario";
$password = "minha_senha";
$dbname = "escola";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
