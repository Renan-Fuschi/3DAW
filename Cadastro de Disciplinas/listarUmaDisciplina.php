<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Lê o arquivo para obter os dados
    $disciplinas = file("disciplinas.txt", FILE_IGNORE_NEW_LINES);

    // Verifica se o índice é válido
    if (isset($disciplinas[$index])) {
        $disciplina = explode(";", $disciplinas[$index]);
    } else {
        die("Disciplina não encontrada.");
    }
} else {
    die("Índice não fornecido.");
}

if (count($disciplina) >= 3) {
    echo "<h1>Detalhes da Disciplina</h1>";
    echo "<p>Nome: " . htmlspecialchars($disciplina[0]) . "</p>";
    echo "<p>Sigla: " . htmlspecialchars($disciplina[1]) . "</p>";
    echo "<p>Carga Horária: " . htmlspecialchars($disciplina[2]) . "</p>";
} else {
    die("Erro: Dados da disciplina estão incompletos ou mal formatados.");
}

?>

