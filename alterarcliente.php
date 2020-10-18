<?php
include "conectarbd.php";

$nome = $_REQUEST['nome'];
$email= $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];

$sql = "update cliente set nome='$nome',email='$email' 
        where cpf=$cpf";

$executar = mysqli_query($con, $sql);
if($executar){
    echo "<script>alert('Atualizado com sucesso');location.href='index.php';</script>";
}