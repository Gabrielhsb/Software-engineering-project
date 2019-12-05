<?php
//incluido arquivos necessarios
	include_once("../persistence/Connection.php");
	include_once("../persistence/CardDAO.php");
	
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	$cardsdao = new CardsDao();
	$resultado = $cardsdao->consultarAll($conexao->getLink());
?>
<!--Cabeçalho dos arquivos html-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Importando icones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importando materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Informar ao navegador que o site é otimizado para celular-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<div class="nabar-fixed">
<nav>
<!--Barra de navegação-->
<div class="nav-wrapper  indigo darken-3">
<a href="#" class="brand-logo center">Kaiba Corporation</a>
<ul id="nav-mobile" class="right hide-on-med-and-down" >
    <li><a href="../View/Perfil.php"><i class="material-icons">person</i></a></li>
    <li><a href="../View/CadastrarCards.html"><i class="material-icons">add</i></a></li>
    <li><div class="divider"></div></li>
  </ul>  
  </li>
</ul>

</nav>
</div>
<div class="row">
  <div class="col s24 m10 push-m1">
  <h3 class="light">Cards</h3>
    <table class="striped"  >
    <!--Tabela de cards-->
      <thead>
        <tr >
          <th  width="20%">Imagem</th>
          <th width="20%"> Nome</th>
          <th width="20%">Preço</th>
          <th width="20%">Raridade</th>
          <th width="20%">Descrição</th>
          
        </tr>
      </thead>
    <tbody>
      <?php
        if(mysqli_num_rows($resultado) > 0):
        while($dados = mysqli_fetch_array($resultado)):
      ?>
      <tr>
        <td> <img src="<?php echo $dados['imagem']; ?>" width=120 height=200></td>
        <td ><?php echo $dados['nome']; ?></td>
        <td >$<?php echo $dados['preço']; ?></td>
        <td><?php echo $dados['raridade']; ?></td>
        <td><?php echo $dados['descriçao']; ?></td>

        <td > <a href="#modal2<?php echo $dados['nome']; ?>"class="btn-floating green waves-effect waves-light btn modal-trigger "> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href="#modal<?php echo $dados['id']; ?>"class="btn-floating red waves-effect waves-light btn modal-trigger"><i class="material-icons ">delete</i></a> </td>  

  
            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Opa!</h4>
              <p>Tem certeza que deseja excluir esse card do sistema ?</p>
            </div>
            <div class="modal-footer">
              

              <form action="C_delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red" >Deletar</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>
           <!-- Modal Structure -->
           <div id="modal2<?php echo $dados['nome']; ?>" class="modal">
            <div class="modal-content">
              <h4>Opa!</h4>
              <p>Quer editar esse card? </p>
            </div>
            <div class="modal-footer">
              

              <form action="C_editar.php" method="POST">
                <input type="hidden" name="nome" value="<?php echo $dados['nome']; ?>">
                <button type="submit" name="btn-deletar" class="btn red" >Editar</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>

      </tr>
        <?php 
        endwhile; 
      else: ?>

      <tr> 
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <?php
      endif;
      ?>
    </tbody>
    </table>
    
    </div>
</div>

          
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
     });     
</script>
<script> M.AutoInit(); </script>
</body>
</html>