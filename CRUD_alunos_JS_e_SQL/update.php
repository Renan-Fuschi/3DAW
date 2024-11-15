<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Editar Aluno</h1>
    <?php
    include 'db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM alunos WHERE id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Aluno não encontrado!";
            exit;
        }
    } else {
        echo "ID do aluno não fornecido!";
        exit;
    }
    ?>
    <form action="aluno.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>" required><br><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" value="<?php echo $row['matricula']; ?>" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $row['data_nascimento']; ?>" required><br><br>

        <button type="submit" name="update">Atualizar</button>
    </form>
</body>
</html>

