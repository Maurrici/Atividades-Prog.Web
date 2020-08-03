<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <title>PizzaList - Novo Pedido</title>
</head>
<style>
    body {
        background-color: #4682B4;    
}
    h1{
        color:black;
    }
    h2{
        color:black;
    }
</style>
<body class="text-white">
    <?php       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["calabresa"]) && empty($_POST["marguerita"]) && empty($_POST["frango"]) && empty($_POST["carneSol"]) && empty($_POST["refri"]) && empty($_POST["suco"])){
                echo "TEM ALGO VAZIO";
            }else{
                //Comandos SQL
                $servername = "sql302.epizy.com";
                $username = "epiz_25970226";
                $password = "rXhzdHhzXUZUblk";
                $dbname = "epiz_25970226_maurrici";

                $conn = mysqli_connect($servername, $username, $password);
                if(!$conn){
                    die("Falha na conexão: " . mysqli_connect_error());
                }

                if(!mysqli_select_db($conn, $dbname)){
                    die("Não foi possível selecionar a base de dados" . $dbname . ":" . mysqli_error($conn));
                }
                
                // Lógica do Programa
                $produtos = array(
                    array("nome" => "calabresa", "preco" => 15.00, "quantidade" => 0),
                    array("nome" => "marguerita", "preco" => 15.00, "quantidade" => 0),
                    array("nome" => "frango", "preco" => 15.00, "quantidade" => 0),
                    array("nome" => "carneSol", "preco" => 15.00, "quantidade" => 0),
                    array("nome" => "refri", "preco" => 8.00, "quantidade" => 0),
                    array("nome" => "suco", "preco" => 5.00, "quantidade" => 0),
                );

                $soma = 0;
                if(isset($_POST["calabresa"])){
                    $aux = $_POST["quantidadeCal"] * 15;
                    $soma = $soma + $aux;
                    $produtos[0]["quantidade"] = $_POST["quantidadeCal"];
                }
                if(isset($_POST["marguerita"])){
                    $aux = $_POST["quantidadeMar"] * 15;
                    $soma = $soma + $aux;
                    $produtos[1]["quantidade"] = $_POST["quantidadeMar"];
                }
                if(isset($_POST["frango"])){
                    $aux = $_POST["quantidadeFra"] * 15;
                    $soma = $soma + $aux;
                    $produtos[2]["quantidade"] = $_POST["quantidadeFra"];
                }
                if(isset($_POST["carneSol"])){
                    $aux = $_POST["quantidadeCar"] * 15;
                    $soma = $soma + $aux;
                    $produtos[3]["quantidade"] = $_POST["quantidadeCar"];
                }
                if(isset($_POST["refri"])){
                    $aux = $_POST["quantidadeRefri"] * 8;
                    $soma = $soma + $aux;
                    $produtos[4]["quantidade"] = $_POST["quantidadeRefri"];
                }
                if(isset($_POST["suco"])){
                    $aux = $_POST["quantidadeSuco"] * 5;
                    $soma = $soma + $aux;
                    $produtos[5]["quantidade"] = $_POST["quantidadeSuco"];
                }
                
                //Inserindo Pedido
                $dataAtual = date("d/m/Y");
                $nomeV = $_POST["vendedor"];
                $sqlInserirPedido = "INSERT INTO `pedido` (`data`, `nomeV`, `precoTotal`) VALUES ('$dataAtual', '$nomeV', '$soma')";

                $ok = mysqli_query($conn,$sqlInserirPedido);

                //Inserindo Produtos do Pedido
                $sqlBuscaId = "SELECT MAX(`ID`) FROM `pedido`";
                $resul = mysqli_fetch_array(mysqli_query($conn,$sqlBuscaId));
                $idPedido = $resul[0];

                //Percorrendo vetor
                foreach($produtos as $produto){
                    if($produto["quantidade"] > 0){
                        $nomeP = $produto["nome"];
                        $preco = $produto["preco"];
                        $quantidade = $produto["quantidade"];
                        $sqlInserirProduto = "INSERT INTO `produto` (`quantidade`, `nome`, `preco`, `id_pedido`) VALUES ('$quantidade', '$nomeP', '$preco', '$idPedido')";
                        
                        mysqli_query($conn,$sqlInserirProduto);
                    }
                }
                header("Location: index.php");
            }
        }
        #Preço total é a Soma
    ?>

    <div class="container">
        <section id="title" class="my-5">
            <h1 class="display-4 text-center"><i class="fas fa-pizza-slice"></i>PizzaList</h1>
        </section>

        <section id="form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="float-left mb-4">
                <h2>Pizzas</h2>

                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="calabresa" id="calabresa" value="calabresa"><label class="form-check-label" for="calabresa"><i class="fas fa-pizza-slice"></i>Calabresa<strong>.......................<i class='fas fa-coins'></i>R$15,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeCal" name="quantidadeCal" min="1" max="100" value="1"> Quantidade</div>
                </div>
                
                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="marguerita" id="marguerita" value="marguerita"><label class="form-check-label"  for="marguerita"><i class="fas fa-pizza-slice"></i>Marguerita<strong>....................<i class='fas fa-coins'></i>R$15,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeMar" name="quantidadeMar" min="1" max="100" value="1"> Quantidade</div>
                </div>
                
                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="frango" id="frango" value="frango"><label class="form-check-label"  for="frango"><i class="fas fa-pizza-slice"></i>Frango<strong>...........................<i class='fas fa-coins'></i>R$15,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeFra" name="quantidadeFra" min="1" max="100" value="1"> Quantidade</div>
                </div>
                
                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="carneSol" id="carneSol" value="carneSol"><label class="form-check-label"  for="carneSol"><i class="fas fa-pizza-slice"></i>Carne de Sol<strong>..................<i class='fas fa-coins'></i>R$15,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeCar" name="quantidadeCar" min="1" max="100" value="1"> Quantidade</div>
                </div>
                
            </div>

            <div class="float-right mb-4">
                <h2>Bebidas</h2>

                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="refri" id="refri" value="refri"><label for="refri"><i class="fas fa-glass-cheers"></i> Coca-Cola<strong>.................<i class='fas fa-coins'></i>R$8,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeRefri" name="quantidadeRefri" min="1" max="100" value="1"> Quantidade</div>
                </div>

                <div class="d-flex justify-content-around m-3">
                    <div><input class="form-check-input" type="checkbox" name="suco" id="suco" value="suco"><label for="suco"><i class="fas fa-glass-cheers"></i>Suco de Laranja<strong>.........<i class='fas fa-coins'></i>R$5,00</strong></label></div>
                    <div class="ml-2"><input type="number" id="quantidadeSuco" name="quantidadeSuco" min="1" max="100" value="1"> Quantidade</div>
                </div>

                <h2>Vendedor</h2>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="vendedor"><i class="fas fa-motorcycle"></i></label>
                    </div>

                    <select class="custom-select" name="vendedor" id="vendedor">
                        <option value="Maurício">Maurício</option>
                        <option value="Pedro">Pedro</option>
                    </select>
                </div>

            </div>

            <button class="btn btn-success btn-block mt-3" type="submit">Fazer Pedido</button>
            </form>
        </section>
    </div>
</body>
</html>