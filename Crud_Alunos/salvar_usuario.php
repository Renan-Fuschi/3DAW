<?php
$file = 'alunos.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $matricula = $_POST["matricula"];
    $data_nascimento = $_POST["data_nascimento"];
    $data = readFileData($file);

    if ($_POST["acao"] == "novo") {
        $id = count($data) + 1;
        $data[] = [$id, $nome, $cpf, $matricula, $data_nascimento];
        echo "<script>alert('Aluno cadastrado com sucesso!');</script>";
    } else if ($_POST["acao"] == "editar") {
        $id = $_POST["id"];
        foreach ($data as &$row) {
            if ($row[0] == $id) {
                $row[1] = $nome;
                $row[2] = $cpf;
                $row[3] = $matricula;
                $row[4] = $data_nascimento;
                echo "<script>alert('Aluno atualizado com sucesso!');</script>";
                break;
            }
        }
    }

    writeFileData($file, $data);
    header("Location: index.php?msg=sucesso");
    exit();
}
?>
