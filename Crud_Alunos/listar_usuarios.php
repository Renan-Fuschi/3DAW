<?php
$file = 'alunos.txt';
$data = readFileData($file);

if (count($data) > 0) {
    echo "<table class='table table-hover'>";
    echo "<thead><tr><th>ID</th><th>Nome</th><th>CPF</th><th>Matrícula</th><th>Data de Nascimento</th><th>Ações</th></tr></thead>";
    echo "<tbody>";
    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>
                <a href='?page=editar&id=" . $row[0] . "' class='btn btn-warning'>Editar</a>
                <a href='?page=excluir&id=" . $row[0] . "' class='btn btn-danger'>Excluir</a>
              </td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p class='alert alert-warning'>Nenhum aluno encontrado!</p>";
}
?>
