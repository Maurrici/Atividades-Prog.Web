<?php 
    include_once("Connection.php");//Importação da Classe
    $bd = new connection();        //Instância da Classe
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurante das Tribos</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
        <!-- Estilo Customizado -->
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php 
            $user = $password = '';
            $Err = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $user = $_POST["user"];
                $password = $_POST["password"];

                if($user != '' && $password != ''){
                    $resp = $bd->login($user, $password);
                    if($resp != "Not found"){
                        header("Location: home.php?user='$resp'");
                    }else{
                        $Err = "Usuário ou Senha não Encontrados";
                    }
                }else{
                    $Err = "Existem Campos Vazios";
                }
            }
        ?>
        <header>
            <h1 class="text-center"><img src="img/Logo.png" alt="Restaurante das Tribos"></h1>
        </header>
        <section id="form" class="mx-auto">
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
                        <input class="form-control" name="password" type="password" placeholder="Digite sua Senha">
                    </div>
                    
                    <small class="text-dark ml-1"><?php echo $Err ?> </small>
                    
                    <button class="mt-1 btn btn-primary btn-block" type="submit">Login</button>
                </form>
            </section> 
    </body>
</html>