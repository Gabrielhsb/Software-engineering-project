<?php
include_once 'includes/header.php';
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
  <div class="col s12 m6 push-m3 ">
  <h3 class="light">Cards</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Raridade</th>
          <th>Descrição</th>
          
        </tr>
      </thead>
    <tbody>
      <tr>
        <td> <img src="includes/adds/db.jpg" width=120 height=200></td>
        <td>Dragão Branco</td>
        <td>$200</td>
        <td>6</td>
        <td>Uma das cartas mais raras!</td>

        <td> <a href=""class="btn-floating green"> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href=""class="btn-floating red"><i class="material-icons ">delete</i></a> </td>  

      </tr>

      <tr>
        <td> <img src="includes/adds/mn.jpg" width=120 height=200></td>
        <td>Mago Negro</td>
        <td>$40</td>
        <td>6</td>
        <td>Brabo</td>

        <td> <a href=""class="btn-floating green"> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href=""class="btn-floating red"><i class="material-icons ">delete</i></a> </td>  

      </tr>
    </tbody>
    </table>
    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>