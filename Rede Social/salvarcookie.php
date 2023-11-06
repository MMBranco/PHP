<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Postagens </title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="painel">
        <div class="cabecalho">
            <h1> Definição de Cookie+ </h1>
            <br>
            <a href="index.html" class="botao"   > Fazer Nova Postagem! </a>
        </div>

        <div class="conteudo" >
            <?php
                // Verifica se requisição é do tipo POST.
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["usuario"];

                    setcookie("nome", $nome, time() + 86400 * 30, "/");

                    echo "Cookie de nome de usuário definido com sucesso.";
                    echo "Nome de Usuário: $nome";
                }else {
                    echo "Erro: Requisição Inválida!";
                }
            ?>
        </div>

        <div class="rodape"   >
            
        </div>
    </div>

</body>

</html>