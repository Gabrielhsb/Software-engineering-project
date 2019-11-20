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
    <li><a href="index.php"><i class="material-icons">home</i></a></li>
    <li><a href="buscar.php"><i class="material-icons">search</i></a></li>
    <li><div class="divider"></div></li>
  </ul>  
  </li>
</ul>

</nav>
</div>
<div class="row">
  <div class="col s24 m10 push-m1">
  <h3 class="light">Buscar</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="input-field col s12">
        <input type="text" name="login" placeholder="Digite o Nome do Card"><br>
        <label for="nome"></label>
        <button type="Submit" name="btn-buscar" class="btn"> <i class="material-icons left">search</i>Buscar</button>
        
      </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>