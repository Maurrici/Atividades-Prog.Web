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
            width: 600px;
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
            width: 400px;
            height: 230px;
            margin: 0 auto;
            overflow: hidden;
        }

        section#info div.texto{
            margin: 5px 20px;
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
        <h2 class="" >Literatura popular cearense</h2>
        <a class="btn btn-danger" href="index.php">Logout <i class="fas fa-sign-out-alt"></i></a>
    </header>

    <section id="info">
        <div class="imagem">
            <img src="img/literatura.jpg" class="img-fluid rounded">
        </div>

        <div class="texto">
            <p>
                No Ceará, a literatura de cordel desenvolveu-se expressivamente em Juazeiro do Norte, desde as primeiras décadas do século
                 passado. Em Fortaleza, a Literatura de Cordel surgiu no período da Oligarquia de Nogueira Accioly, período esse, em que 
                 circularam alguns folhetos destratando a figura do governador cearense. Nesta mesma época, atuava também em Fortaleza o 
                 poeta-editor potiguar Luiz da Costa Pinheiro, autor do clássico “O Boi Mandingueiro e o Cavalo Misterioso”.
            </p>
        </div>
    </section>

    <section id="links" class="mt-3">
        <a href="p2.php" class="btn btn-marrom btn-lg float-left"><i class="fas fa-chevron-circle-left fa-2x"></i></a>
        <a href="p4.php" class="btn btn-marrom btn-lg float-right"><i class="fas fa-chevron-circle-right fa-2x"></i></a>
    </section>
</body>
</html>