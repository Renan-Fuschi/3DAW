<?php
$file = 'alunos.txt';
$id = $_GET["id"];
$data = readFileData($file);
$aluno = null;

foreach ($data as $row) {
    if ($row[0] == $id) {
        $aluno = $row;
        break;
    }
}

if ($aluno) {
    echo "<h2>Detalhes do Aluno</h2>";
    echo "<p><strong>ID:</strong> " . $aluno[0] . "</p>";
    echo "<p><strong>Nome:</strong> " . $aluno[1] . "</p>";
    echo "<p><strong>CPF:</strong> " . $aluno[2] . "</p>";
    echo "<p><strong>Matrícula:</strong> " . $aluno[3] . "</p>";
    echo "<p><strong>Data de Nascimento:</strong> " . $aluno[4] . "</p>";
    echo "<a href='index.php' class='btn btn-primary'>Voltar</a>";
} else {
    echo "<p class='alert alert-warning'>Aluno não encontrado!</p>";
    echo "<a href='index.php' class='btn btn-primary'>Voltar</a>";
}
?>
