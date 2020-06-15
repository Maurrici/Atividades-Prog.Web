<html>
    <head>
        <title>Quiz Z | Questão 03</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>

    <body>
        <div class="centralizar">
            <h1><img src="images/logo.png"></h1>
        </div>

        <div class="conteudo quest03">
            <h3>03. Marque Verdadeiro ou falso para as sentenças das técnicas de Dragon Ball Z:</h3>
            <form action="quest04.php" method="GET" class="vouf">
                
                <!-- Caixa de Escolha -->
                <sub>V&nbsp;&nbsp;&nbsp;&nbsp;F</sub><br>
                <!-- Alternativa 01 -->
                <input type="radio" name="resp03a" value="V" />&nbsp;
                <input type="radio" name="resp03a" value="F" /><kbd>&nbsp;A técninca do Kaioken foi ensinada a Goku pelo senhor Kaioh.</kbd><br>
                <!-- Alternativa 02 -->
                <input type="radio" name="resp03b" value="V" />&nbsp;
                <input type="radio" name="resp03b" value="F" /><kbd>&nbsp;Todas as raças podem alcançar a transformação de Super Sayajin.</kbd><br>
                <!-- Alternativa 03 -->
                <input type="radio" name="resp03c" value="V" />&nbsp;
                <input type="radio" name="resp03c" value="F" /><kbd>&nbsp;A técnica do teletransporte foi criada por Son Goku.</kbd><br>
                <!-- Alternativa 04 -->
                <input type="radio" name="resp03d" value="V" />&nbsp;
                <input type="radio" name="resp03d" value="F" /><kbd>&nbsp;O Kamehameha foi criado por Mestre Kame.</kbd><br>

                <input type="hidden" name="user" value=<?php echo $_GET['user'];?>/>
                <input type="hidden" name="resp01" value=<?php echo $_GET['resp01'];?>/>
                <input type="hidden" name="resp02" value=<?php echo $_GET['resp02'];?>/>

                <input type="submit" name="start" value="Próximo" class="botao" />

            </form>
        </div>
    </body>
</html>