<html>

<head>
<title>Config BD</title>
    <!-- HTML 4 -->
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- HTML5 -->
    <meta charset="utf-8"/> 
</head>
    
    <body> 
        <?php
            $name = $sal = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["name"];
                $sal = $_POST["sal"];
                
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

                if($name != '' && $sal != ''){
                    $sql = "INSERT INTO funcionario (nome, salario) VALUES ('$name', $sal)";
                        

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        echo "Os registros foram inseridos com sucesso";
                    } else {
                        echo "Não foi possível executar ($sql) no banco de dados: $dbname" . mysqli_error($conn);
                        exit;
                    }
                }

            }
            
        ?>

        <form class="form-group mt-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="container">
                <input class="form-control" type="text" name="name" placeholder="Insira o nome do funcionário">

                <input class="form-control" type="text" name="sal" placeholder="Insira o salário">

                <button type="submit" class="btn btn-block btn-primary">Inserir</button>
            </div>
        </form>

        <div class="container">
            <a class="btn btn-block btn-success" href="readInBD.php">Visualizar Funcionários Cadastrados</a>
        </div>
    </body>
</html>