<?php include("cabecalho.php");?>
<section class="page" id="fundo">
    <section class="container" id="fundo" ><br><br><br><br>
<!--Destinatário-->   

       <div class="form-text justify-content-center">
          <h1>Cadastro de Clientes</h1>
       </div><br>
       <form method="POST" role="form" action="armazenarcadastro.php" method="post">
<!--Campos de Cadastro de clientes-->  
       </div><br>
             <div class="form-group">          
                <input class="form-control" type="text" placeholder="Nome" id="formularios" name="nome" value="<?php echo isset($_REQUEST['nome'])?$_REQUEST['nome']:'';?>" required autofocus><br>
                <select class="form-control" type="list" placeholder="Logradouro" name="estado" id="formularios3"> 
                    <option value="#">Sexo</option> 
                    <option id="masculino" value="ac">Masculino</option> 
                    <option id="feminino" value="al">Feminino</option> 
                  
                </select><br>                
                <input class="form-control" type="text" placeholder="Telefone" id="formularios" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"><br>                
                <input class="form-control" type="email"placeholder="Digite seu Email" id="formularios" name="email" value="<?php echo isset($_REQUEST['email'])?$_REQUEST['email']:'';?>" required>
                <label class="col-md-1 control-label" name="cpf" for="radios"><h7 id="sexo">CPF</h7></label>
                <input class=formularios" type="<?php echo isset($_REQUEST['cpf'])?'hidden':'text';?>" id="cpf" name="cpf" value="<?php echo isset($_REQUEST['cpf'])?$_REQUEST['cpf']:'';?>" required><br>
                <label class="col-md-1 control-label" for="radios"><h7 id="sexo">Nascimento</h7></label>
                <input class="form-control" type="date" id="formularios" maxlength="10" ><br>
                <input class="form-control" type="text" placeholder="Logradouro" id="formularios"><br>
                <select class="form-control" type="list" placeholder="Logradouro" name="estado" id="formularios3"> 
                    <option value="#">Selecione o Estado</option> 
                    <option value="ac">Acre</option> 
                    <option value="al">Alagoas</option> 
                    <option value="am">Amazonas</option> 
                    <option value="ap">Amapá</option> 
                    <option value="ba">Bahia</option> 
                    <option value="ce">Ceará</option> 
                    <option value="df">Distrito Federal</option> 
                    <option value="es">Espírito Santo</option> 
                    <option value="go">Goiás</option> 
                    <option value="ma">Maranhão</option> 
                    <option value="mt">Mato Grosso</option> 
                    <option value="ms">Mato Grosso do Sul</option> 
                    <option value="mg">Minas Gerais</option> 
                    <option value="pa">Pará</option> 
                    <option value="pb">Paraíba</option> 
                    <option value="pr">Paraná</option> 
                    <option value="pe">Pernambuco</option> 
                    <option value="pi">Piauí</option> 
                    <option value="rj">Rio de Janeiro</option> 
                    <option value="rn">Rio Grande do Norte</option> 
                    <option value="ro">Rondônia</option> 
                    <option value="rs">Rio Grande do Sul</option> 
                    <option value="rr">Roraima</option> 
                    <option value="sc">Santa Catarina</option> 
                    <option value="se">Sergipe</option> 
                    <option value="sp">São Paulo</option> 
                    <option value="to">Tocantins</option> 
                </select><br>                
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seus dados, com ninguém.</small><br>
             </div>
 <!--Botão Enviar-->       
          <div class=text-right>
             <input  type="submit" value="Salvar dados" class="btn btn-success" id="botao" />
          </div>
       </form><br><br>         
</section>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
</section>
<?php include("rodape.php");?>