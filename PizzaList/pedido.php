<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    body {
        background-color: #4682B4;
}
</style>
<body>
    <h1 class="display-4 text-center mt-3 mb-5"><i class="fas fa-pizza-slice"></i>PizzaList</h1>
    <?php 
        
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
        if (isset($_GET['id_pedido'])){
            $id_pedido = $_GET['id_pedido'];
        }
        $pesquisa = mysqli_stmt_init($conn);
        
        $sql = "SELECT * FROM `produto`";
        $result = mysqli_query($conn, $sql);
    
        while($row = mysqli_fetch_assoc( $result )){
            if($id_pedido == $row["id_pedido"]){
                if($row["nome"]=="carneSol"){
                    $row["nome"]="Carne do Sol";
                }
                if($row["nome"]=="refri"){
                    $row["nome"]="Coca-Cola";
                } 
                if($row["nome"]=="suco"){
                    $row["nome"]="Suco de Laranja";
                }

                echo "<li class='w-75 mx-auto list-group-item list-group-item-primary ml-5 mr-5'" 
                . "<div class='d-inline float-left'>"."<i class='fas fa-pizza-slice'></i>"." Produto: "."<a class='text-capitalize'>". $row["nome"]."</a>"."</div>"
                . "<div class='d-inline float-right' height='100px'>" ."<i class='fas fa-sort-amount-up-alt'></i>"." Quantidade: " . $row["quantidade"] . "</div>"  
                . "<div class='d-inline float-right mr-5'>"."<i class='fas fa-coins'></i>"." Valor Und: R$" . $row["preco"] . "</div>"
                . "</li>"; 
            }

        }

    ?>
</body>
</html>