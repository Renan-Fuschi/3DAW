<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="novo">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required>
    </div>
    <div class="mb-3">
        <label for="matricula" class="form-label">Matrícula</label>
        <input type="text" class="form-control" id="matricula" name="matricula" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
