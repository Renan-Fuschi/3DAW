<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];

    // Lê o arquivo para obter os dados atuais
    $disciplinas = file("disciplinas.txt", FILE_IGNORE_NEW_LINES);

    // Obtém os dados da disciplina para edição
    $disciplina = explode(";", $disciplinas[$index]);

    // Mostra o formulário com os dados para edição
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Disciplina</title>
</head>
<body>
    <h1>Editar Disciplina</h1>
    <form action="salvar_edicao.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($disciplina[0]); ?>"><br>
        Sigla: <input type="text" name="sigla" value="<?php echo htmlspecialchars($disciplina[1]); ?>"><br>
        Carga Horária: <input type="text" name="carga" value="<?php echo htmlspecialchars($disciplina[2]); ?>"><br>
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
<?php } ?>
