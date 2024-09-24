<?php
$file = 'alunos.txt';
$id = $_GET["id"];
$data = readFileData($file);
$row = [];

foreach ($data as $item) {
    if ($item[0] == $id) {
        $row = $item;
        break;
    }
}
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row[1]; ?>" required>
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $row[2]; ?>" required>
    </div>
    <div class="mb-3">
        <label for="matricula" class="form-label">Matrícula</label>
        <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $row[3]; ?>" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $row[4]; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
