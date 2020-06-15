<html>
    <head>
        <title>Quiz Z | Questão 04</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>

    <body>
        <div class="centralizar">
            <h1><img src="images/logo.png"></h1>
        </div>

        <div class="conteudo quest04">
            <h3>04. Em qual planeta Son Goku aprendeu a técnica do teletransporte?</h3><br>
            <form action="resultado.php" method="GET">
                <select name="resp04" class="selecao">
                    <option value="Terra">Terra</option>
                    <option value="Planeta do Senhor Kaioh">Planeta do Senhor Kaioh</option>
                    <option value="Namekusei">Namekusei</option>
                    <option value="Planeta Vegeta">Planeta Vegeta</option>
                    <option value="Planeta Yardrat">Planeta Yardrat</option>
                    <option value="Nova Namekusei">Nova Namekusei</option>
                    <option value="Planeta Freeza">Planeta Freeza</option>
                    <option value="Planeta Sodala">Planeta Sodala</option>
                    <option value="Planeta do Grande Kaioh">Planeta do Grande Kaioh</option>
                    <option value="Paraíso">Paraíso</option>
                </select>
                <input type="hidden" name="user" value=<?php echo $_GET['user'];?>/>
                <input type="hidden" name="resp01" value=<?php echo $_GET['resp01'];?>/>
                <input type="hidden" name="resp02" value=<?php echo $_GET['resp02'];?>/>
                <input type="hidden" name="resp03a" value=<?php echo $_GET['resp03a'];?>/>
                <input type="hidden" name="resp03b" value=<?php echo $_GET['resp03b'];?>/>
                <input type="hidden" name="resp03c" value=<?php echo $_GET['resp03c'];?>/>
                <input type="hidden" name="resp03d" value=<?php echo $_GET['resp03d'];?>/>

                <input type="submit" name="start" value="Próximo" class="botao" />

            </form>
        </div>
    </body>
</html>