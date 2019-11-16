<?php
//conexão
include_once 'login/db_connect.php';
//header
include_once 'includes/header.php';

include_once 'includes/msg.php';
?>

<div class="nabar-fixed">
<nav>
<div class="nav-wrapper  indigo darken-3">
<a href="index.php" class="brand-logo center">Kaiba Corporation</a>
<ul id="nav-mobile" class="right hide-on-med-and-down" >
    <li><a href="login/perfil.php"><i class="material-icons">person</i></a></li>
    <li><a href="adicionar.php"><i class="material-icons">edit</i></a></li>
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
      <thead>
        <tr >
          <th  width="20%" >Imagem</th>
          <th width="20%"> Nome</th>
          <th width="20%">Preço</th>
          <th width="20%">Raridade</th>
          <th width="20%">Descrição</th>
          
        </tr>
      </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM cards";
        $resultado = mysqli_query($connect, $sql);
        
        if(mysqli_num_rows($resultado) > 0):

        while($dados = mysqli_fetch_array($resultado)):


      ?>
      <tr>
        <td> <img src="<?php echo $dados['imagem']; ?>" width=120 height=200></td>
        <td ><?php echo $dados['nome']; ?></td>
        <td >$<?php echo $dados['preço']; ?></td>
        <td><?php echo $dados['raridade']; ?></td>
        <td><?php echo $dados['descriçao']; ?></td>

        <td > <a href="editar.php?id=<?php echo $dados['id']; ?>"class="btn-floating green"> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href="#modal<?php echo $dados['id']; ?>"class="btn-floating red waves-effect waves-light btn modal-trigger"><i class="material-icons ">delete</i></a> </td>  

            <!-- Modal Structure -->
          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Opa!</h4>
              <p>Tem certeza que deseja excluir esse card do sistema ?</p>
            </div>
            <div class="modal-footer">
              

              <form action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red" >Deletar</button>
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

<?php
include_once 'includes/footer.php';
?>