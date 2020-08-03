<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <title>PizzaList</title>
</head>
<style>
    body {
        background-color: #4682B4;
}
</style>
<body>
    <?php 
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
                
        $sql = "SELECT * FROM `pedido`";
                        
        $result = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <section id="title" class="my-5">
            <h1 class="display-4 text-center "><i class="fas fa-pizza-slice"></i>PizzaList</h1>
        </section>
    
        <section id="list">
            <div>
            <center><a href="newpedido.php" class="btn btn-success mb-3 btn-lg"><i class="fas fa-plus"></i> Adicionar um Novo Pedido</a></center>
            </div>

            <div class="w-75 m-auto">
                <ul class="list-group">
                    <?php 
                        while ($row = mysqli_fetch_assoc( $result )) { 
                                echo "<a class='list-group-item list-group-item-primary btn btn-outline-primary' href='pedido.php?id_pedido=".$row["id"]."'>" . "<div class='float-left'><i class='far fa-calendar-alt'></i> " . $row["data"] . " <i class='far fa-id-badge'></i> ID: ". $row["id"] . "</div>" . " <i class='fas fa-user-tie'></i> Vendedor: " . $row["nomeV"]  . "<div class='float-right'>" .  " <i class='fas fa-coins'></i> Valor Total: R$" . $row["precoTotal"] . "</div>" ."</a>"; 
                        }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>