<?php
// para conectar banco de dados, precisamos de:
// host,user,password
$host = "localhost"; // computador BD
$user = "raiz"; // usuário do BD
$password = "senac"; // senha do BD
$database = "festa5";

// conectar ao BD mysql
$con = mysqli_connect($host, $user, $password, $database);
if(!$con){ //testar se não conectar
     die("Não foi possível conectar");
}


