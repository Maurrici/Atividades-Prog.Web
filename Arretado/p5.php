<?php 
    session_start();

    if($_SESSION["status"] != 1){
        header("Location: erro.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu Arretado</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <!-- Fonte Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <title>Museu Arretado</title>

    
    <style>
        body{
            background: #ffb15f;
            color: #8B4513;
            font-family: 'Ubuntu', sans-serif;
        }

        header{
            padding: 30px 20px;
            background: #8B4513;
            color: #ffb15f;
        }

        header a{
            height: 40px;
        }

        h2{
            width: 400px;
        }

        section#info{
            width: 70%;
            margin: 0 auto;
            margin-top: 30px;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 0 10px #8B4513;
            background: rgba(255,255,255,0.4);
        }

        section#info div.imagem{
            width: 300px;
            height: 200px;
            margin: 0 auto;
            overflow: hidden;
        }

        section#info div.texto{
            margin: 10px 20px;
        }

        section#links a.btn-marrom{
            background-color: #8B4513;
            color: #ffb15f;
        }
    </style>
</head>
<body>
    <header class="d-flex justify-content-between">
        <h1 class="">Museu Arretados</h1>
        <h2 class="" >Artes plásticas</h2>
        <a class="btn btn-danger" href="index.php">Logout <i class="fas fa-sign-out-alt"></i></a>
    </header>

    <section id="info">
        <div class="imagem">
            <img src="img/arte.png" class="img-fluid rounded">
        </div>

        <div class="texto">
            <p>
                O movimento de maior destaque na história da pintura cearense foi o modernismo com o surgimento da Sociedade Cearense de Artes 
                Plásticas em 1944 que reuniu vários pintores como Antônio Bandeira, José Tarcísio Ramos, Otacílio de Azevedo, Aldemir Martins, 
                Camelo Ponte, Inimá de Paula, Zenon Barreto e outros. Bandeira é considerado um dos maiores pintores abstracionistas do Brasil. 
                Antes desse movimento alguns importante pintores cearenses foram Raimundo Cela e Vicente Leite que no começo do século XX 
                retrataram várias paisagens do sertão e litoral do estado.
                Na segunda metade do século XX o suíço Jean-Pierre Chabloz em passagem pelo Ceará descobriu a arte do acreano de origem cearense
                Chico da Silva no Pirambu retratando figuras primitivas de dragões e outros animais com carvão e tinta guache. Seu estilo foi 
                classificado como arte naïf e teve grande destaque até a década de 1980. No final do Século XX o pintor Leonilson foi o maior 
                destaque cearense na pintura.    
            </p>
        </div>
    </section>

    <section id="links" class="mt-3">
        <a href="p4.php" class="btn btn-marrom btn-lg float-left"><i class="fas fa-chevron-circle-left fa-2x"></i></a>
    </section>
</body>
</html>