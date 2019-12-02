<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/CardDAO.php");
	
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	
  $cardsdao = new cardsDao();
	$resultado = $cardsdao->consultar($_POST["nome"], $conexao->getLink());
	$dados = mysqli_fetch_array($resultado);
	
?>

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
<nav>
<div class="nav-wrapper  indigo darken-3">
<a href="../index.php" class="brand-logo center">Kaiba Corporation</a>
<ul id="nav-mobile" class="right hide-on-med-and-down" >
    <li><div class="divider"></div></li>
  </ul>  
  </li>
</ul>

</nav>
<div class="row">
  <div class="col s12 m6 push-m3 ">
  <h3 class="light">Editar Card</h3>
    <form action="C_update.php" method= "POST">
    <!--Formulario para Edição do card-->
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="input-field col s12">
          <input type="text" name="imagem" id="imagem" value="<?php echo $dados['imagem']; ?>">
          <label for="nome">Imagem do Card (Link)</label>
        </div>

      <div class="input-field col s12">
        <input type="text" name="nome" id="nome"value="<?php echo $dados['nome']; ?>" >
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="preço" id="preço" value="<?php echo $dados['preço']; ?>">
        <label for="nome">Preço</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="raridade" id="raridade" value="<?php echo $dados['raridade']; ?>">
        <label for="nome">Raridade</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="descrição" id="descrição" value="<?php echo $dados['descriçao']; ?>">
        <label for="nome">Descrição</label>
      </div>
        <button type="Submit" name="btn-editar" class="btn">Atualizar</button>
        <a href="index.php" class="btn">Listar Cards</a>
    </form>
    </div>
</div>

<!--JavaScript at end of body for optimized loading-->
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