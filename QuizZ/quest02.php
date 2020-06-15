<html>
    <head>
        <title>Quiz Z | Questão 02</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>

    <body>
        <div class="centralizar">
            <h1><img src="images/logo.png"></h1>
        </div>
        
        <div class="conteudo quest02">
            <h3>02. Goku tem um amor especial pela esfera do dragão que seu avô deixou como lembrança para ele, essa esfera é :</h3><br>
            <form action="quest03.php" method="GET" class="esferas">
                <input type="radio" name="resp02" value="Esfera01" id="i1" class="input-esferas"/>
                <label class="label-esferas" for="i1"><img src="images/esfera01.png" width="100" height="100"/></label>

                <input type="radio" name="resp02" value="Esfera02" id="i2" class="input-esferas"/>
                <label class="label-esferas" for="i2"><img src="images/esfera02.png" width="100" height="100" /></label>

                <input type="radio" name="resp02" value="Esfera03" id="i3" class="input-esferas"/>
                <label class="label-esferas" for="i3"><img src="images/esfera03.png" width="100" height="100" /></label>

                <input type="radio" name="resp02" value="Esfera04" id="i4" class="input-esferas"/>
                <label class="label-esferas" for="i4"><img src="images/esfera04.png" width="100" height="100" /></label>

                <input type="radio" name="resp02" value="Esfera05" id="i5" class="input-esferas"/>
                <label class="label-esferas" for="i5"><img src="images/esfera05.png" width="100" height="100" /></label>

                <input type="radio" name="resp02" value="Esfera06" id="i6" class="input-esferas"/>
                <label class="label-esferas" for="i6"><img src="images/esfera06.png" width="100" height="100" /></label>

                <input type="radio" name="resp02" value="Esfera07" id="i7" class="input-esferas"/>
                <label class="label-esferas" for="i7"><img src="images/esfera07.png" width="100" height="100" /></label>

                <input type="hidden" name="user" value=<?php echo $_GET['user'];?>/>
                <input type="hidden" name="resp01" value=<?php echo $_GET['resp01'];?>/>

                <input type="submit" name="start" value="Próximo" class="botao" />
            </form>
        </div>
    </body>
</html>