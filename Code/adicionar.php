<?php
include_once 'includes/header.php';
?>
<div class="row">
  <div class="col s12 m6 push-m3 ">
  <h3 class="light">Novo Card</h3>
    <form action="">
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
        <button type="Submit" class="btn">Adicionar</button>
        <a href="index.php" class="btn">Listar Cards</a>
    </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>