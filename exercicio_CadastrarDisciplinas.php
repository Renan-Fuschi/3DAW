<?php
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $nome = trim($_POST["nome"]);
    $sigla = trim($_POST["sigla"]);
    $carga = trim($_POST["carga"]);
    
    if (empty($nome) || empty($sigla) || empty($carga)) {
        $msg = "Por favor, preencha todos os campos.";
    } else {
        $msg = "nome: " . $nome . " sigla: " . $sigla . " carga: " . $carga;
        
        // Abre ou cria o arquivo "disciplinas.txt" para anexar dados
        $arqDisc = fopen("disciplinas.txt", "a") or die("Erro ao criar arquivo");

        // Escreve a linha no arquivo
        $linha = $nome . ";" . $sigla . ";" . $carga . "\n";
        fwrite($arqDisc, $linha);

        // Fecha o arquivo
        fclose($arqDisc);
        
        $msg = "Disciplina criada com sucesso!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Disciplina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        p {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Nova Disciplina</h1>
        <form action="ex07_incluirDisciplina.php" method="POST">
            Nome: <input type="text" name="nome">
            <br><br>
            Sigla: <input type="text" name="sigla">
            <br><br>
            Carga Horária: <input type="text" name="carga">
            <br><br>
            <input type="submit" value="Criar Nova Disciplina">
        </form>
        <p><?php echo $msg; ?></p>
    </div>
</body>
</html>
