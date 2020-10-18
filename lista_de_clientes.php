<?php include("cabecalho.php");?>
<section class="page" id="fundo">
    <section class="container" id="fundo" ><br><br><br><br>
<!--Destinatário-->   

       <div class="form-text justify-content-center">
          <h1>Cadastrar festa</h1>
       </div><br>
       <div>
           <?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
                echo "<p>Os dados foram removidos.</p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }
        } 
    ?>
    <table>
        <caption>Pessoas</caption>
        <tr><td>Id</td><td>Nome</td><td>Email</td><td>Editar</td><td>Apagar</td></tr>
        <?php 
            //Estabelece a conexao com o mysql
            $conexao = mysqli_connect("servidor","usuario","senha","bancodedados");
            if( !$conexao ){
                echo "Ops.. Erro na conexão.";
                exit;
            }
            //Carrega os dados
            $sql = "SELECT * FROM pessoas";
            $consulta = mysqli_query($conexao, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['email']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='edita.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";    
                echo "<button>Editar</button>";
                echo "</form>";
                echo "</td>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='remove.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
    </table>
       </div>
</section>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
<script src="validacao3.js" type="text/javascript"></script>
</section>
<?php include("rodape.php");?>