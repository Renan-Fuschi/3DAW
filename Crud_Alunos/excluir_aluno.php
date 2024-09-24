<?php
$file = 'alunos.txt';
$id = $_GET["id"];
$data = readFileData($file);

// Encontrar e remover o registro com o ID correspondente
foreach ($data as $key => $row) {
    if ($row[0] == $id) {
        unset($data[$key]);
        echo "<script>alert('Registro excluído com sucesso!');</script>";
        break;
    }
}

// Reescrever o arquivo com os dados atualizados
writeFileData($file, $data);

header("Location: index.php");
?>
