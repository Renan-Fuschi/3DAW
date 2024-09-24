<?php
$file = 'alunos.txt';

// Função para ler o arquivo e retornar os dados como um array
function readFileData($file) {
    $data = [];
    if (file_exists($file)) {
        $fileData = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($fileData as $line) {
            $data[] = str_getcsv($line);
        }
    }
    return $data;
}

// Função para escrever dados no arquivo
function writeFileData($file, $data) {
    $fileData = [];
    foreach ($data as $row) {
        $fileData[] = implode(',', $row);
    }
    file_put_contents($file, implode(PHP_EOL, $fileData));
}
?>
