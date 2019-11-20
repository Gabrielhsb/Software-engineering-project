<?php
//conexao
include_once 'login/db_connect.php';
//Header
include_once 'includes/header.php';
//Select o id card a ser editado
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM cards WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>
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
    <form action="update.php" method= "POST">
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

<?php
include_once 'includes/footer.php';
?>