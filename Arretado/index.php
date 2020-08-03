<?php 
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                color: #fff;
                font-family: 'Ubuntu', sans-serif;
            }

            header{
                color: #8B4513;
            }

            section#form{
                margin-top: 100px;
            }

            h1{
                font-size: 5em;
            }

        </style>
    </head>
    <body>
        <?php
            $user = $senha = "";
            $Err = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $user = $_POST["user"];
                $senha = $_POST["senha"];
                
                //Config. para acesso ao mySql localmente 
                $servername = "sql302.epizy.com";
                $username = "epiz_25970226";
                $password = "rXhzdHhzXUZUblk";
                $dbname = "epiz_25970226_maurrici"; 
                


                $conn = mysqli_connect($servername, $username, $password);


                if (!$conn) {
                    die("Falha na Conexão: " . mysqli_connect_error());
                }

                // Selecionando banco
                if (!mysqli_select_db($conn,$dbname)) {
                    echo "Não foi possível selecionar base de dados \"$dbname\": " . mysqli_error($conn);
                    exit;
                }

                if($user != '' && $senha != ''){
                    $sql = "SELECT * FROM `users` WHERE nome = '$user' AND senha = '$senha'";
                        

                    $result = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_assoc($result);

                    if ($result){
                        $_SESSION["status"] = 1;
                        header('Location: p2.php'); 
                    } 
                    else $Err = "Usuário ou Senha Incorretos";
                    
                }else{
                    $Err = "Campo Vazio";
                }

            }
            
        ?>

        <header>
            <div class="container">
                <h1 class="text-center">Museu Arretados</h1>
                <p class="text-right mx-5"><i class="float-left fas fa-water fa-5x"></i><i class="fas fa-umbrella-beach fa-5x"></i></p>
                <p class="text-center"><i class="fas fa-sun fa-5x"></i></p>
            </div>
        </header>

        <section id="form" class="w-25 mx-auto">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-circle"></i></span>   
                    </div>
                    <input class="form-control" name="user" type="text" placeholder="Digite seu User">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>   
                    </div>
                    <input class="form-control" name="senha" type="password" placeholder="Digite sua Senha">
                </div>
                
                <small class="text-dark ml-1"><?php echo $Err ?> </small>
                
                <button class="mt-1 btn btn-primary btn-block" type="submit">Login</button>
            </form>
        </section>
    </body>
</html>