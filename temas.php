<?php include("cabecalho.php");?>
<section class="page" id="fundo">
    <section class="container" id="fundo" ><br><br><br><br>
<!--Destinatário-->   

       <div class="form-text justify-content-center">
          <h1>Cadastrar temas</h1>
       </div><br>
       <form method="POST" role="form">
<!--Campos de Cadastro do tema-->  
       </div><br>
             <div class="form-group">          
                <input class="form-control" type="text" placeholder="Nome" name="nome" id="formularios"><br><br><br>
                <textarea placeholder="Descrição" name="descricao" class="form-control" rows="3" id="formulario" ></textarea>
             </div><br>
             <label id="sexo">Selecione a cor da toalha</label>
                <input class="form-control" name="cor" type="color" id="formularios"><br><br><br>
 <!--Botão Enviar-->       
          <div class=text-right>
             <input  type="submit" value="Salvar dados" class="btn btn-success" id="botao" />
          </div>
       </form><br><br>              
</section>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
</section>
<?php include("rodape.php");?>