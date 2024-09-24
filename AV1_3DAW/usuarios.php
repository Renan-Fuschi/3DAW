<?php
function cadastrarUsuario($nome, $email, $senha) {
    $caminhoArquivo = 'C:\xampp\htdocs\3DAW\AV1_3DAW\usuarios.txt';
    
    if (!file_exists($caminhoArquivo)) {
        file_put_contents($caminhoArquivo, '');
    }

    $usuarios = file_get_contents($caminhoArquivo);
    $usuarios .= "$nome;$email;$senha\n";
    file_put_contents($caminhoArquivo, $usuarios);

    echo "Usuário cadastrado com sucesso!";
}
?>
