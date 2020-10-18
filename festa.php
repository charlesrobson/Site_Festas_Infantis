<?php include("cabecalho.php");?>
<section class="page" id="fundo">
    <section class="container" id="fundo" ><br><br><br><br>
<!--Destinatário-->   

       <div class="form-text justify-content-center">
          <h1>Cadastrar festa</h1>
       </div><br>
       <form method="POST" role="form" action="<?php 
              echo isset($_REQUEST['nome'])?
                  'alterarcliente.php':
                  'salvarcliente.php';?>">
<!--Campos de Cadastro do tema-->  
             </div><br>
             <label id="sexo">Cliente</label>
                 <select class="form-control" type="text"id="formulario4" id="nome" name="nome" value="<?php echo isset($_REQUEST['nome'])?$_REQUEST['nome']:'';?>" required autofocus>
                    <option value="ac">Selecionar cliente</option> 
                    <option value="ac">Ana Maria dos Anjos</option> 
                    <option value="al">Miguel Espínola</option> 
                    <option value="am">João Francisco Oliveira</option> 
                    <option value="ap">Mário Filipe</option> 
                    <option value="ba">Lourenço Benjamin</option> 
                 </select><br><br><br>
                     <label id="sexo">Tema</label>
                 <select class="form-control" type="text"id="formulario4" id="tema" name="tema" value="<?php echo isset($_REQUEST['tema'])?$_REQUEST['tema']:'';?>" required autofocus>
                    <option value="ac">Selecionar tema</option> 
                    <option value="ac">Homem-Aranha</option> 
                    <option value="al">Vingadores</option> 
                    <option value="am">Liga da Justiça</option> 
                    <option value="ap">Whatchman</option> 
                    <option value="ba">X-man</option> 
                 </select><br><br><br><label id="sexo">Festa</label>
                 <select class="form-control" type="text"id="formulario4" id="festa" name="festa" value="<?php echo isset($_REQUEST['festa'])?$_REQUEST['festa']:'';?>" required autofocus >
                    <option value="ac">Selecionar festa</option>  
                    <option value="ac">Haras do Morro</option> 
                    <option value="al">Casa de Vidro</option> 
                    <option value="am">Maizon Mizuno</option> 
                    <option value="ap">Quality Hotel</option> 
                    <option value="ba">Salão Cristal</option> 
                 </select><br>
                 <input class="form-control" type="date" id="formularios" maxlength="10" ><br>
                 <input class="form-control" type="text" placeholder="Endereço" id="formularios" maxlength="10" ><br>
                 
             </div><br>
 <!--Botão Enviar-->       
          <div class=text-right>
              <button  type="submit" value="Salvar dados" class="btn btn-success" id="botao" />
              <?php 
                echo isset($_REQUEST['nome'])?'Alterar':'Salvar';
                ?>
          </button>
          </div>
       </form><br><br> 
</section>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
<script src="validacao3.js" type="text/javascript"></script>
</section>
<?php include("rodape.php");?>