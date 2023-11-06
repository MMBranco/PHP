<?php
    // Fazer conexão do backend com o banco de dados.
    $nomeServidor = "sql105.infinityfree.com"; // localhost
    $username = "if0_35249800"; // root
    $senha = "9RcIwTTigNfxjd"; // "";
    $nomeBanco = "if0_35249800_rede_banco"; // rede_banco

    // mysqli - driver responsável por conectar com o banco.
    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    // Se a conexão falhar - "die" encerra a execução e apresenta uma mensagem.
    if($conexao -> connect_error) {
        die("Conexão com o banco de dados falhou!" . $conexao -> connect_error);
    }
?>