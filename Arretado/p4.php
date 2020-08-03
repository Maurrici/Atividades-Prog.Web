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
            height: 150px;
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
        <h2 class="">Humor cearense</h2>
        <a class="btn btn-danger" href="index.php">Logout <i class="fas fa-sign-out-alt"></i></a>
    </header>

    <section id="info">
        <div class="imagem">
            <img src="img/humor.jpeg" class="img-fluid rounded">
        </div>

        <div class="texto">
            <p>
                O Ceará se tornou conhecido nacionalmente como berço de talentos humorísticos como Chico Anysio, Renato Aragão e Tom Cavalcante,
                 dentre vários outros. Embora a percepção de que há um Ceará moleque, como verdadeira identidade do povo cearense, seja controversa, 
                 a história do estado é repleta de casos verídicos e curiosos que parecem corroborar com essa idéia, destacando-se, sobretudo, 
                 figuras populares como o Bode Ioiô, que era famoso em Fortaleza e inclusive foi eleito vereador da cidade, e o Seu Lunga, de 
                 Juazeiro do Norte, famoso pela sua intolerância com perguntas óbvias, assim como eventos como a vaia ao sol também em Fortaleza, 
                 depois de quase um dia inteiro de céu nublado na cidade. A novela humorística da Record Ceará contra 007 de 1965 ajudou a formar 
                 esse imaginário de um Ceará Moleque.
            </p>
        </div>
    </section>

    <section id="links" class="mt-3">
        <a href="p3.php" class="btn btn-marrom btn-lg float-left"><i class="fas fa-chevron-circle-left fa-2x"></i></a>
        <a href="p5.php" class="btn btn-marrom btn-lg float-right"><i class="fas fa-chevron-circle-right fa-2x"></i></a>
    </section>
</body>
</html>