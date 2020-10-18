<?php include("cabecalho.php");?>
<section class="page" id="fundo">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
    <section class="container" id="fundo" ><br><br><br><br>
<!--Destinatário-->   

       <div class="form-text justify-content-center">
          <h1>Cadastro de Festas</h1>
       </div><br>
       <form method="POST" role="form" action="<?php 
              echo isset($_REQUEST['nome'])?
                  'alterarcliente.php':
                  'salvarcliente.php';?>">
<!--Campos de Cadastro do tema-->  
             </div><br>
                <table class="table">
  <thead id="bordatab" class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CLIENTE</th>
      <th scope="col">TEMA</th>
      <th scope="col">DATA</th>
      <th scope="col">AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ana Maria</td>
      <td>Batman</td>
      <td>10/10/2018</td>
      <td><button class="btn btn-success">Editar</button><button id="botao2" class="btn btn-danger">Excluir</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sandro Tavares</td>
      <td>Homem Aranha</td>
      <td>12/11/2018</td>
      <td><button class="btn btn-success">Editar</button><button id="botao2" class="btn btn-danger">Excluir</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Roberta Campos de Sousa</td>
      <td>Princesas</td>
      <td>23/06/2018</td>
      <td><button class="btn btn-success">Editar</button><button id="botao2" class="btn btn-danger">Excluir</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Adélia Cristina de Santana</td>
      <td>Branca de Neve</td>
      <td>21/07/2018</td>
      <td><button class="btn btn-success">Editar</button><button id="botao2" class="btn btn-danger">Excluir</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jeovanete Bergamotto Ariranha</td>
      <td>Liga da Justiça</td>
      <td>25/09/2018</td>
      <td><button class="btn btn-success">Editar</button><button id="botao2" class="btn btn-danger">Excluir</button></td>
    </tr>
  </tbody>
</table>       
             </div><br>
    
          <div class="container-fluid">
                           <nav class="text-center" aria-label="Navegação de página exemplo">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Anterior">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Anterior</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Próximo">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Próximo</span>
      </a>
    </li>
  </ul>
</nav>  
          </div>
       </form><br><br> 
</section>
<script src="validacao3.js" type="text/javascript"></script>
</section>
<?php include("rodape.php");?>