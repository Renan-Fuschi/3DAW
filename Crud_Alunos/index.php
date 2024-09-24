<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Lista de Alunos</h1>
        <a href="?page=novo" class="btn btn-primary mb-3">Novo Aluno</a>
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
            case "novo":
                include("novo_usuario.php");
                break;
            case "listar":
                include("listar_usuarios.php");
                break;
            case "salvar":
                include("salvar_usuario.php");
                break;
            case "editar":
                include("editar_usuario.php");
                break;
            case "excluir":
                include("excluir_aluno.php");
                break;
            case "ver":
                include("listar_um_usuario.php");
                break;
            default:
                include("listar_usuarios.php");
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
