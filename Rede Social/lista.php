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
            <h1> Lista de Posts </h1>
            <br>
            <a href="index.html" class="botao"   > Fazer Nova Postagem! </a>
        </div>

        <?php
            $usuario = $_COOKIE["nome"];
            echo "Bem-Vindo $usuario!";

            session_start();
            if(isset($_SESSION["postagens"])) { 

            foreach ($_SESSION["postagens"] as $postagem) {
                echo '<div class="card">';
                echo "<strong> $usuario: </strong>";
                echo "$postagem";
                echo '</div>';  }
            }else {
                // Se não existir nenhuma postagem.
                echo "<p> Nenhuma postagem encontrada! </p>";
            }

        ?>

        <div class="conteudo" >
        <form action="salvar.php" method="post">
                <textarea name="postagem" id="postagem" cols="25" rows="7" placeholder="O quê está pensando?"></textarea>
                <br>
                <br>
                <input type="submit" value="Postar" class="enviar">
            </form>
        </div>

        <div class="rodape"   >
            <br>
            <a href="cookie.html" class="botao" > Cadastrar Usuario </a>
            <br>
            <a href="busca.html" class="botao"   > Buscar            </a>
            <br>
            <a href="lista.php" class="botao"    > Lista de Posts    </a>
        </div>
    </div>

</body>

</html>