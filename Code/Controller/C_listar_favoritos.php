<?php
//incluido arquivos necessarios e iniciando instacias
	include_once("../persistence/Connection.php");
  include_once("../persistence/CardDAO.php");
  include_once("../persistence/mensagem.php");
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
  $cardsdao = new CardsDao();
  $id_usuario = $_SESSION['id_usuario'];
  $query = "SELECT id_cards FROM favoritos WHERE Id_clientes='$id_usuario'";
  $res = mysqli_query($conexao->getlink(), $query);
  $resultado = $cardsdao->consultarId($res,$conexao->getLink());
	
  
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
<a href="../View/inicial.php" class="brand-logo center">Kaiba Corporation</a>
<ul id="nav-mobile" class="right hide-on-med-and-down" >
    <li><a href="../View/Perfil.php"><i class="material-icons">person</i></a></li>
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
      
        $i = 0;
        while($i < sizeof($resultado)):
          $dados = mysqli_fetch_array($resultado[$i]);
          $i = $i+1;
      ?>
      <tr>
        <td><img src="<?php echo $dados['imagem']; ?>" width=120 height=200></td>
        <td><?php echo $dados['nome']; ?></td>
        <td>$<?php echo $dados['preço']; ?></td>
        <td><?php echo $dados['raridade']; ?></td>
        <td><?php echo $dados['descriçao']; ?></td>
        <td ><a href="#modal<?php echo $dados['id'] ; ?>"class="btn-floating red waves-effect waves-light btn modal-trigger "> <i class="material-icons ">remove</i></a> </td>  

  
            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Opa!</h4>
              <p>Quer adicionar esse card aos favoritos?</p>
            </div>
            <div class="modal-footer">
              

              <form action="C_favorito_delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red" >Remover</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>
      </tr>
        <?php 
        endwhile; 
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