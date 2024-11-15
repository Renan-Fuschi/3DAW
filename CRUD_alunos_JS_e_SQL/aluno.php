<?php
include 'db.php';

if (isset($_POST['create'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO alunos (nome, cpf, matricula, data_nascimento) VALUES ('$nome', '$cpf', '$matricula', '$data_nascimento')";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno adicionado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "UPDATE alunos SET nome='$nome', cpf='$cpf', matricula='$matricula', data_nascimento='$data_nascimento' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<a href="read.php">Voltar</a>
