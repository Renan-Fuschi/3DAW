<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    $carga = $_POST['carga'];

    // Lê o arquivo para obter os dados atuais
    $disciplinas = file("disciplinas.txt", FILE_IGNORE_NEW_LINES);

    // Atualiza a linha correspondente
    $disciplinas[$index] = "$nome;$sigla;$carga";

    // Salva de volta no arquivo
    file_put_contents("disciplinas.txt", implode("\n", $disciplinas) . "\n");

    // Redireciona de volta para a página principal
    header("Location: exercicio_CadastrarDisciplinas.php");
    exit();
}
?>
