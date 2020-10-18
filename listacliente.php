<?php
// conectar com BD
include 'conectarbd.php';

// consulta sql 
$query = "select * from cliente order by nome";

// executar sql
$executar = mysqli_query($con, $query);

// pecorrer a tabela do BD
echo "<table border='1'>";
echo "<tr><td>CPF</td><td>Nome</td><td>Email</td><td>Opções</td></tr>";
while ($linha = mysqli_fetch_array($executar)){
    $nome= $linha['nome'];
    $email = $linha['email'];
    $cpf = $linha['cpf'];
    echo "<tr><td>$cpf</td><td>$nome</td><td>$email</td><td>
            <a href='excluircliente.php?cpf=$cpf'>Excluir</a> | 
            <a href='index.php?cpf=$cpf&nome=$nome&email=$email'>
                Editar
            </a>    
            </td></tr>";
}
echo "</table>";
// fechar a conexão
mysqli_close($con);


