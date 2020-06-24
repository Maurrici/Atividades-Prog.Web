<html>
<head>
<title>BD_01</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
    
    <body> 


        <?php

        header('Content-type: text/html; charset=utf-8');
            
        //Config. para acesso ao mySql no infinitFree (hairon) 
        /*$servername = "sql101.epizy.com";
        $username = "epiz_25968604";
        $password = "gNRO99MOv4TvsEP"; 
        $dbname = "epiz_25968604_hairon";*/


        //Config. para acesso ao mySql localmente 
        $servername = "sql302.epizy.com";
        $username = "epiz_25970226";
        $password = "rXhzdHhzXUZUblk";
        $dbname = "epiz_25970226_maurrici"; 

        $conn = mysqli_connect($servername, $username, $password);


        if (!$conn) {
        die("Falha na Conexão: " . mysqli_connect_error());
        }
        echo "Conectado com Sucesso <BR><BR>";

        // Selecionando banco
        if (!mysqli_select_db($conn,$dbname)) {
            echo "Não foi possível selecionar base de dados \"$dbname\": " . mysqli_error($conn);
            exit;
        }


        $sql = "SELECT nome, salario FROM funcionario";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
        die("Falha na Execução da Consulta: " . $sql ."<BR>" .
            mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 0) {
            echo "Não foram encontradas linhas, nada para mostrar <BR>";
            exit;
        }

        // Enquanto uma linha de dados existir, coloca esta linha em $row como uma matriz associativa { dicióario tipo chave (campo) / valor (registro) }
        while ($row = mysqli_fetch_assoc($result)) {
            echo 'Nome: '.$row["nome"]."<br>";
            echo 'Salario: '.$row["salario"].'<br><br>';
        } 

        mysqli_free_result($result); 

        ?>

    </body>
</html> 