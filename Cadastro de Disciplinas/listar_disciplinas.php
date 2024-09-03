<?php

// Verifica se o arquivo "disciplinas.txt" existe
if (file_exists("disciplinas.txt")) {
    // Abre o arquivo para leitura
    $file = fopen("disciplinas.txt", "r");

    // Inicializa uma variável para armazenar as linhas do arquivo
    $disciplinas = [];

    // Lê cada linha do arquivo
    while (($line = fgets($file)) !== false) {
        // Remove espaços em branco ao redor da linha
        $line = trim($line);
        $data = explode(";", $line);

        // Adiciona os dados à lista de disciplinas
        if (count($data) == 3 && !empty($data[0])) {
            $disciplinas[] = $data;
        }
    }

    // Fecha o arquivo
    fclose($file);
}

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Carga Horária</th>
    </tr>
    <?php if (!empty($disciplinas)): ?>
        <?php foreach ($disciplinas as $disciplina): ?>
            <tr>
                <td><?php echo htmlspecialchars($disciplina[0]); ?></td>
                <td><?php echo htmlspecialchars($disciplina[1]); ?></td>
                <td><?php echo htmlspecialchars($disciplina[2]); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3" style="text-align:center;">Nenhuma disciplina cadastrada.</td>
        </tr>
    <?php endif; ?>
</table>
