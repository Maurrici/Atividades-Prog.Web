<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Mercado e-commerce na Jurema</title>
    <style>
        body{
            background: #B7D968;
            font-family: 'Ubuntu', sans-serif;
            color: #241509;
        }

        h4{
            font-size: 1em;
            font-weight: 400;
        }

        .form-check label{
            font-size: 0.8em;
            margin-right: 5px;
        }

        .form-check input{
            margin-right: 30px;
        }

        section#form{
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 30px;
            background: rgba(255, 87, 51, 0.7);
        }

        small{
            font-size:90%;
        }
        
        .red{
            color: red;
        }

        #success{
            height: 400px;
        }

        a{
            text-decoration: none;
            color: #241509;
        }

        a:hover{
            text-decoration: none;
            color: #241509;
        }

    </style>
</head>
<body class="container pb-5">
    <!-- Código PHP -->
    <?php 
        //Variáveis
        $nameErr = $emailErr = $siteErr = $q1Err = $q2Err = $opiniao = "";
        $name = $email = $site = $q1 = $q2 = "";
        $sucesso = false;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Name
            if(empty($_POST["name"])){
                $nameErr = "Campo obrigatório";
            }else{
                $name = filter($_POST["name"]);
                if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                    $nameErr = "Apenas letras neste campo";
                }
            }

            //Email
            if(empty($_POST["email"])){
                $emailErr = "Campo obrigatório";
            }else{
                $email = filter($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Tem algo de errado com seu email";
                }
            }

            //Site
            if(empty($_POST["site"])){
                $siteErr = "Campo obrigatório";
            }else{
                $site = filter($_POST["site"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $site)){
                    $siteErr = "Este endereço é inválido";
                }
            }

            //Radio buttons
            if(empty($_POST["q1"])){
                $q1Err = "Responda para nos ajudar";
            }else{
                $q1 = filter($_POST["q1"]);
            }

            if(empty($_POST["q2"])){
                $q2Err = "Responda para nos ajudar";
            }else{
                $q2 = filter($_POST["q2"]);
            }

            //Comentário
            $opiniao = filter($_POST["opiniao"]);

            if($nameErr == "" && $emailErr == "" && $siteErr == "" && $q1Err == "" && $q2Err == ""){
                if($name != "" &&  $email != "" && $site != "" && $q1 != "" && $q2 != ""){
                    $sucesso = true;
                }
            }
        }

        function filter($data){
            $data = trim($data);//Retirar espaçamentos laterais
            $data = stripslashes($data); //Retirar barras invertidas
            $data = htmlspecialchars($data);//Converter caracteres de html
            return $data;
        }

    ?>
    
    <header>
        <a href="index.php"><h1 class="display-1">E-commerce na Jurema</h1></a>
        <small class="w-75 d-block">Já pensou que legal se as pessoas podessem comprar os seus produtos
            virtualmente, seria ótimo para você e para seu cliente! <br> Se achou a ideia
            interessante responda o questionário a baixo e diga para nós a sua opinião.
        </small>
    </header>

    <section id="form" class="mt-5 <?php if($sucesso) echo 'd-none'; ?>">
        <form method="post" class="clearfix" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>Dados da Empresa</legend>

                <label for="name">Nome da Empresa</label> <?php echo "<small class='red'>$nameErr</small>"?>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control"
                    value="<?php echo $name ?>"> 

                <label for="email">Email</label> <?php echo "<small class='red'>$emailErr</small>"?>
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    class="form-control"
                    value="<?php echo $email ?>">

                <label for="site">Site</label> <?php echo "<small class='red'>$siteErr</small>"?>
                <input 
                type="text" 
                name="site" 
                id="site" 
                class="form-control"
                value="<?php echo $site ?>">
            </fieldset>

            <fieldset>
                <legend>Opiniões sobre o e-commerce</legend>
                <div class="form-check">
                    <h4>Você ja vende produtos de forma remota?</h4> 
                    <label for="q1s">Sim</label>
                    <input 
                        type="radio" 
                        name="q1" 
                        <?php if(isset($q1) && $q1 == "Sim") echo "checked" ?>
                        id="q1s"
                        value="Sim">
                    <label for="q1n">Não</label>
                    <input 
                        type="radio" 
                        name="q1" 
                        <?php if(isset($q1) && $q1 == "Não") echo "checked" ?>
                        id="q1n"
                        value="Não">
                        <?php echo "<small class='red'>$q1Err</small>"?>
                </div>

                <div class="form-check">
                    <h4>O seu público alvo compra de forma online?</h4> 
                    <label for="q2s">Sim, todos</label>
                    <input 
                        type="radio" 
                        name="q2" 
                        id="q2s"
                        <?php if(isset($q2) && $q2 == "Sim, todos") echo "checked" ?>
                        value="Sim, todos">
                    <label for="q2t">Alguns</label>
                    <input 
                        type="radio" 
                        name="q2" 
                        id="q2t"
                        <?php if(isset($q2) && $q2 == "Alguns") echo "checked" ?>
                        value="Alguns">
                    <label for="q2n">Poucos ou nenhum</label>
                    <input 
                        type="radio" 
                        name="q2" 
                        id="q2n"
                        <?php if(isset($q2) && $q2 == "Poucos ou nenhum") echo "checked" ?>
                        value="Poucos ou nenhum">
                        <?php echo "<small class='red'>$q2Err</small>"?>
                </div>
                
            </fieldset>

            <fieldset>
                <legend>Comentários</legend>
                <label for="opiniao">Digite suas sugestões:</label>
                <textarea 
                    class="form-control" 
                    name="opiniao" 
                    id="opiniao"><?php echo $opiniao ?></textarea>
            </fieldset>
        
            <button type="submit" class="btn btn-primary btn-lg float-right mt-3" >Enviar</button>
        </form>
    </section>
    
    <section class="text-success text-center mt-5 <?php if($sucesso) echo 'd-block'; else echo 'd-none' ?>">
        <h2>Formulário Enviado com Sucesso!</h2>
    </section>
</body>
</html>