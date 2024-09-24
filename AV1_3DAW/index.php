<?php
include 'usuarios.php';
include 'perguntas&respostas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cadastrarUsuario'])) {
        cadastrarUsuario($_POST['nome'], $_POST['email'], $_POST['senha']);
    } elseif (isset($_POST['criarMultiplaEscolha'])) {
        criarPerguntaMultiplaEscolha($_POST['pergunta'], explode(",", $_POST['opcoes']), $_POST['respostaCorreta']);
    } elseif (isset($_POST['alterarMultiplaEscolha'])) {
        alterarPerguntaMultiplaEscolha($_POST['id'], $_POST['novaPergunta'], explode(",", $_POST['novasOpcoes']), $_POST['novaRespostaCorreta']);
    } elseif (isset($_POST['excluir'])) {
        excluirPergunta($_POST['id']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jogo Corporativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1, h2 {
            color: #4CAF50;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .form-section {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Perguntas</h1>
        <div class="form-section">
            <form method="post">
                <h2>Cadastrar Usuário</h2>
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit" name="cadastrarUsuario">Cadastrar</button>
            </form>
        </div>

        <div class="form-section">
            <form method="post">
                <h2>Criar Pergunta de Múltipla Escolha</h2>
                <input type="text" name="pergunta" placeholder="Pergunta">
                <input type="text" name="opcoes" placeholder="Opções (separadas por vírgula)">
                <input type="text" name="respostaCorreta" placeholder="Resposta Correta">
                <button type="submit" name="criarMultiplaEscolha">Criar</button>
            </form>
        </div>

        <div class="form-section">
            <form method="post">
                <h2>Alterar Pergunta de Múltipla Escolha</h2>
                <input type="text" name="id" placeholder="ID da Pergunta">
                <input type="text" name="novaPergunta" placeholder="Nova Pergunta">
                <input type="text" name="novasOpcoes" placeholder="Novas Opções (separadas por vírgula)">
                <input type="text" name="novaRespostaCorreta" placeholder="Nova Resposta Correta">
                <button type="submit" name="alterarMultiplaEscolha">Alterar</button>
            </form>
        </div>

        <div class="form-section">
            <form method="post">
                <h2>Excluir Pergunta</h2>
                <input type="text" name="id" placeholder="ID da Pergunta">
                <button type="submit" name="excluir">Excluir</button>
            </form>
        </div>

        <h2>Listar Perguntas</h2>
        <?php listarPerguntas(); ?>
    </div>
</body>
</html>
