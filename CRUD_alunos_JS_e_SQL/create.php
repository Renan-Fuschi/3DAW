<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Adicionar Novo Aluno</h1>
    <form action="aluno.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <button type="submit" name="create">Adicionar</button>
    </form>
</body>
</html>

