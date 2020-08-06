<!-- Todos os arquivos que irão utilizar o banco de dados devem importar e instanciar a classe Connection
     Toda função de Connection deve chamar a função connection para obter uma conexão com o banco de dados
 -->
<?php 
    class Connection{
        public $servername = 'localhost';
        public $username = 'root';
        public $password = '';
        public $dbname = 'reservas';

        public function connect(){
            $conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
            if(mysqli_connect_error()){
                return "Não foi possível estabelecer conexão";
            }else{
                return $conn;
            }
        }

        public function login($usuario, $senha){
            $sql = "SELECT `nome` FROM `usuarios` WHERE nome = '$usuario' AND senha = '$senha'";
            $resul = mysqli_query($this->connect(),$sql);
            $resul = mysqli_fetch_assoc($resul);

            if($resul){
                return $resul["nome"];
            }else{
                return "Not Found";
            }
        }
    }
?>