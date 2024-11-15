<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Aluno excluído com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="read.php">Voltar</a>
