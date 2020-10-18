<?php
// inclui o arquivo de conexao com banco
include 'conectarbd.php';

// pega o conteudo digitado no formulário
$cpf = $_REQUEST['cpf'];
$email = $_REQUEST['email'];
$nome = $_REQUEST['nome'];
$festa = $_REQUEST['festa'];
$tema = $_REQUEST['tema'];

// inserir na tabela cliente
$sql = "insert into cliente(cpf,nome,email,festa,tema) values ($cpf,'$nome','$email','$festa','$tema')";

// executar o comando SQL com mysqli_query
$executar = mysqli_query($con, $sql);
if($executar){ // testa o comando insert
    echo "<script>alert('Gravado com sucesso');location.href='index.php';</script>";
}else{
    die ("erro ao inserir cliente");
}

// fechar a conexão
mysqli_close($con);


