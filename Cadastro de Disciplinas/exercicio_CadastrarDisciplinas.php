<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST["nome"];
    $sigla = $_POST["sigla"];
    $carga = $_POST["carga"];
    $msg = "";

    // Validação simples (se necessário)
    if (!empty($nome) && !empty($sigla) && !empty($carga)) {
        // Abre ou cria o arquivo "disciplinas.txt" para anexar dados
        $arqDisc = fopen("disciplinas.txt", "a") or die("Erro ao abrir ou criar arquivo");

        // Escreve a linha no arquivo
        $linha = htmlspecialchars($nome) . ";" . htmlspecialchars($sigla) . ";" . htmlspecialchars($carga) . "\n";
        fwrite($arqDisc, $linha);

        // Fecha o arquivo
        fclose($arqDisc);

        // Mensagem de sucesso
        $msg = "Disciplina cadastrada com sucesso!";
    } else {
        $msg = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Criar Nova Disciplina e Lista</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            gap: 20px;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            max-width: 900px;
            width: 100%;
        }

        .form-container,
        .table-container {
            flex: 1;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #6c63ff;
            outline: none;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 12px;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #574b90;
        }

        p {
            color: #4CAF50;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }
        }
    </style>
    <script>
        function atualizarTabela() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'listar_disciplinas.php', true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.querySelector('.table-container').innerHTML = this.responseText;
                }
            }
            xhr.send();
        }

        function cadastrarDisciplina(event) {
            event.preventDefault();

            const form = document.querySelector('form');
            const formData = new FormData(form);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.querySelector('p').textContent = 'Disciplina cadastrada com sucesso!';
                    form.reset();
                    atualizarTabela(); // Atualiza a tabela após cadastrar a disciplina
                }
            }
            xhr.send(formData);
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', cadastrarDisciplina);
            atualizarTabela(); // Carrega a tabela ao carregar a página
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="form-container">
            <h1>Criar Nova Disciplina</h1>
            <form action="exercicio_CadastrarDisciplinas.php" method="POST">
                Nome: <input type="text" name="nome" required>
                <br>
                Sigla: <input type="text" name="sigla" required>
                <br>
                Carga Horária: <input type="text" name="carga" required>
                <br>
                <input type="submit" value="Criar Nova Disciplina">
            </form>
            <p><?php echo $msg; ?></p> <!-- Mostra a mensagem aqui -->
        </div>

        <div class="table-container">
            <!-- A tabela será carregada aqui -->
        </div>
    </div>
</body>

</html>
