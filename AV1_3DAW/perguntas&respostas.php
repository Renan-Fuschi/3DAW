<?php
function gerarNovoId() {
    $perguntas = file('C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt', FILE_IGNORE_NEW_LINES);
    $ultimoId = count($perguntas);
    return $ultimoId;
}

function criarPerguntaMultiplaEscolha($pergunta, $opcoes, $respostaCorreta) {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt';
    
    if (!file_exists($caminhoArquivo)) {
        file_put_contents($caminhoArquivo, '');
    }

    $id = gerarNovoId();
    $perguntas = file_get_contents($caminhoArquivo);
    $perguntas .= "pergunta de ID $id:$pergunta" . implode(",", $opcoes) . ";$respostaCorreta\n";
    file_put_contents($caminhoArquivo, $perguntas);
}

function alterarPerguntaMultiplaEscolha($id, $novaPergunta, $novasOpcoes, $novaRespostaCorreta) {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt';
    $perguntas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES);
    if (isset($perguntas[$id])) {
        $perguntas[$id] = "$id;M;$novaPergunta;" . implode(",", $novasOpcoes) . ";$novaRespostaCorreta";
        file_put_contents($caminhoArquivo, implode("\n", $perguntas) . "\n");
    } else {
        echo "Pergunta com ID $id não encontrada.";
    }
}

function listarPerguntas() {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt';
    $perguntas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES);
    foreach ($perguntas as $pergunta) {
        echo $pergunta . "<br>";
    }
}

function listarPergunta($id) {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt';
    $perguntas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES);
    if (isset($perguntas[$id])) {
        echo $perguntas[$id];
    } else {
        echo "Pergunta com ID $id não encontrada.";
    }
}

function excluirPergunta($id) {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\perguntas.txt';
    $perguntas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES);
    if (isset($perguntas[$id])) {
        unset($perguntas[$id]);
        file_put_contents($caminhoArquivo, implode("\n", $perguntas) . "\n");
    } else {
        echo "Pergunta com ID $id não encontrada.";
    }
}
?>
