<?php
session_start();
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

  <div class="nabar-fixed">
    <nav>
    <!--Barra de navegação-->
    <div class="nav-wrapper  indigo darken-3">
    <a href="" class="brand-logo center">Kaiba Corporation</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down" >
        <li><a href="../View/Perfil.php"><i class="material-icons">person</i></a></li>
        <li><div class="divider"></div></li>
      </ul>  
      </li>
    </ul>
    </nav>
    </div>
    <div class="row">
      <div class="col s24 m10 push-m1 center">
      <h3 class="light">Qual card você procura?</h3>
      <form action="../Controller/C_busca.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div> 
          <button type="Submit" name="btn-cadastrar" class="btn">Buscar</button>
          <a class="btn" href="../Controller/C_listar_cliente.php" >Listar todos</a>
      </form>
                </div>
              </div>
    
          </tr>


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