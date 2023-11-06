<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="painel">
        <div class="cabecalho">
            Senac Connect
        </div>

        <div class="conteudo">
            <h2> Postagem efetuada com Sucesso! </h2>

            <?php
                // $usuario = "Virgulino";
                // Criação do Cookie
                // Nome do Cookie + Valor + dataExpiração + onde pode acessar("/" Qualquer lugar)
                // setcookie("nome", $usuario, time() + 86400 * 30, "/");
                $usuario = $_COOKIE["nome"];

                // Verifica se a requisição foi feita usando POST.
                if($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Obtèm o conte údo da postagem do campo "postagem".
                    $postagem = $_POST["postagem"];
                    
                    echo "$usuario postou: $postagem";

                    session_start(); // Iniciar sessão, iniciar variável sessão.
                    
                    // Se a lista de ponstagens são existe (!) se existe, (isset).
                    if(!isset($_SESSION["postagens"])) {

                        // Cria uma lista vazia de sessão, só a primeira vez.
                        $_SESSION["postagens"] = array();
                    }

                    // Adiciona postagem a lista de postagens.
                    array_push($_SESSION["postagens"], $postagem);
                }

            ?>
            
        </div>

        <div class="rodape">
            <br>
            <a href="index.html" class="botao"   > Fazer Nova Postagem! </a>
            <br>
            <a href="cookie.html" class="botao" > Cadastrar Usuario    </a>
            <br>
            <a href="salvar.html" class="botao"  > Buscar               </a>
            <br>
            <a href="lista.php" class="botao"    > Lista de Posts       </a>
        </div>
    </div>

</body>

</html>