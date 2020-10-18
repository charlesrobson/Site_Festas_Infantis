<?php
// conectar com bd
include 'conectarbd.php';

// pegar a variável do servidor
$cpf = $_REQUEST['cpf'];

// criar a string sql para excluir
// delete de cliente quando cpf = requisitado
$sql = "delete from cliente where cpf=$cpf";

// executar o comando sql
$executar = mysqli_query($con, $sql) or die("Erro excluir");

// voltar para o arquivo index.php
//header("location: index.php"); //ir para o arquivo com php

$resposta = "<script>confirm('Deseja excluir?');</script>";
echo $resposta;
if ($resposta){
    echo "<script>location.href='index.php'</script>";
}





