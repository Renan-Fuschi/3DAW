<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $nome = $_POST["nome"];
    $sigla = $_POST["sigla"];
    $carga = $_POST["carga"];
    $msg = "";
    
    echo "nome: " . $nome . " sigla: " . $sigla . " carga: " . $carga;

    // Abre ou cria o arquivo "disciplinas.txt" para anexar dados
    $arqDisc = fopen("disciplinas.txt", "a") or die("Erro ao abrir ou criar arquivo");

    // Escreve a linha no arquivo
    $linha = $nome . ";" . $sigla . ";" . $carga . "\n";
    fwrite($arqDisc, $linha);

    // Fecha o arquivo
    fclose($arqDisc);

    // Mensagem de sucesso
    $msg = "Disciplina cadastrada com sucesso!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Disciplina</title>
    <style>
        /* seu estilo permanece o mesmo */
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Nova Disciplina</h1>
        <form action="ex07_incluirDisciplina.php" method="POST">
            Nome: <input type="text" name="nome" required>
            <br><br>
            Sigla: <input type="text" name="sigla" required>
            <br><br>
            Carga Horária: <input type="text" name="carga" required>
            <br><br>
            <input type="submit" value="Criar Nova Disciplina">
        </form>
        <p><?php echo $msg; ?></p> <!-- Mostra a mensagem aqui -->
    </div>
</body>
</html>
