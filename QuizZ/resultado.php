<html>
    <head>
        <title>QuizZ | Resultado</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="utf-8"/>
        <style type="text/css">
            .centralizar{
                width: 100%;
                text-align: center;
            }

            .gabarito{
                width: 500px;
                height: 460px;
                float: left;
                margin-left: 10%;
            }

            .nota{
                width: 400px;
                height: 450px;
                margin-right: 10%;
                float: right;
                background: url('images/resultado.jpg');
                border: 5px rgb(247, 118, 13) solid;
            }
            .title{
                font-size: 22px;
            }

            .valor{
                width: 130px;
                height: 40px;
                margin: 330 134 0 134;
                text-align: center;
            }

            table{
                border-collapse: collapse;
                width: 100%;
                height: 100%;
                color: white;
                background: url('images/fundoselect.png') no-repeat center  #05162B;
                border: 5px rgb(247, 118, 13) solid;
                text-align: center;
                font-size: 17px;
            }

            body{
                background: #05162B;
            }

            h4{
                margin: 0 auto;
                color: rgb(243, 224, 42);
                font-size: 40px;
                font-weight: 900;
            }

            h2{
                text-align: center;
                margin: 0 auto;
                color: rgb(243, 224, 42);
                font-size: 40px;
                font-weight: 900;
                width: 400px;
                height: 50px;
                background-color: rgb(15, 123, 71);
            }
        </style>
    </head>

    <body>
        <!--Código php-->
        <?php
            $user = substr($_GET['user'],0,-4); 
            $resp01 = substr($_GET['resp01'],0,-3);
            $resp02 = substr($_GET['resp02'], 0, -2);
            $resp03a = substr($_GET['resp03a'], 0, -1);
            $resp03b = substr($_GET['resp03b'], 0, -1);
            $resp03c = substr($_GET['resp03c'], 0, -1);
            $resp03d = substr($_GET['resp03d'], 0, -1);
            $resp04 = $_GET['resp04'];

            $resul = 0;
        ?>
        
        <div class="centralizar">
            <h1><img src="images/logo.png"></h1>
        </div>

        <div class="gabarito">
            <table border="1" align="center">
                <tr class="title">
                    <td>Questão</td>
                    <td>Pontuação</td>
                    <td>Sua Resposta</td>
                    <td>Validação</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>1,0</td>
                    <td><?php echo $resp01; ?></td>
                    <td><?php  
                        if($resp01 == 'Kuririn' || $resp01 == 'kuririn'){
                            $resul = $resul + 1.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>3,0</td>
                    <td><?php echo $resp02; ?></td>
                    <td><?php  
                        if($resp02 == 'Esfera04'){ 
                            $resul = $resul + 3.0;
                            echo "<img src='images/certo.png'/>";
                            
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>03 - A</td>
                    <td>1,0</td>
                    <td><?php echo $resp03a; ?></td>
                    <td><?php  
                        if($resp03a == 'V'){
                            $resul = $resul + 1.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>03 - B</td>
                    <td>1,0</td>
                    <td><?php echo $resp03b; ?></td>
                    <td><?php  
                        if($resp03b == 'F'){
                            $resul = $resul + 1.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>03 - C</td>
                    <td>1,0</td>
                    <td><?php echo $resp03c; ?></td>
                    <td><?php  
                        if($resp03c == 'F'){
                            $resul = $resul + 1.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>

                    </td>
                </tr>
                <tr>
                    <td>03 - D</td>
                    <td>1,0</td>
                    <td><?php echo $resp03d; ?></td>
                    <td><?php  
                        if($resp03d == 'V'){
                            $resul = $resul + 1.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>2,0</td>
                    <td><?php echo $resp04; ?></td>
                    <td><?php  
                        if($resp04 == 'Planeta Yardrat'){
                            $resul = $resul + 2.0;
                            echo "<img src='images/certo.png'/>";
                        }else{
                            echo "<img src='images/errado.png'/>";
                        }
                    ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="nota">
            <h2><?php echo $user; ?>:</h2>
            <div class="valor">
                <h4><?php echo $resul; ?></h4>
            </div>
        </div>
    </body>
</html>