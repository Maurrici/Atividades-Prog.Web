<html>
    <head>
        <title>Quiz Z | Questão 01</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-9" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>

    <body>
        <div class="centralizar">
            <h1><img src="images/logo.png"></h1>
        </div>

        <div class="conteudo quest01">
            <h3>01. Qual o nome do personagem famoso por morrer diversas vezes ao longo da história:</h3><br>
            <form action="quest02.php" method="GET">
                <input class="textbox" type="text" name="resp01">
                <input type="hidden" name="user" value=<?php echo $_GET['user'];?>/>
                <input type="submit" name="start" value="Próximo" class="botao" />
            </form>
        </div>
    </body>
</html>