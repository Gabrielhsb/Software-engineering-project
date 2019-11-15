<?php
include_once 'includes/header.php';
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
  <h3 class="light">Novo Card</h3>
    <form action="create.php" method= "POST">
      <div class="input-field col s12">
          <input type="text" name="imagem" id="imagem">
          <label for="nome">Imagem do Card (Link)</label>
        </div>

      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="preço" id="preço">
        <label for="nome">Preço</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="raridade" id="raridade">
        <label for="nome">Raridade</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="descrição" id="descrição">
        <label for="nome">Descrição</label>
      </div>
        <button type="Submit" name="btn-cadastrar" class="btn">Adicionar</button>
        <a href="index.php" class="btn">Listar Cards</a>
    </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>