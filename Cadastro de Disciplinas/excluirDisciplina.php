<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];

    // Lê o arquivo para obter os dados atuais
    $disciplinas = file("disciplinas.txt", FILE_IGNORE_NEW_LINES);

    // Remove a linha correspondente
    if (isset($disciplinas[$index])) {
        unset($disciplinas[$index]);

        // Reindexa o array
        $disciplinas = array_values($disciplinas);

        // Salva de volta no arquivo
        file_put_contents("disciplinas.txt", implode("\n", $disciplinas) . "\n");
    }

    // Redireciona de volta para a página principal
    header("Location: exercicio_CadastrarDisciplinas.php");
    exit();
}
?>
