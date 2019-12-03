<?php
//conexão
require_once 'Persistence/Connection.php';
require_once 'Persistence/mensagem.php';
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
       <div class="row">
      <div class="col s12 m6 push-m3 ">
      <title>Login</title>

      <meta charset="utf-8">
  
      <h3 class="light">Login</h3>
    <hr>
    <form action="Controller/C_login.php" method="POST">
    <div class="input-field col s12">
        <input type="text" name="login"><br>
        <label for="nome">Email</label>
      </div>
    <div class="input-field col s12">
        <input type="password" name="senha"><br>
        <label for="nome">Senha</label>
      </div>
        <button type="Submit" name="btn-entrar" class="btn"> <i class="material-icons left">done</i>Entrar</button>
        <a href="View/Cadastrar_login.php">Cadastre-se</a>
        
        </div>
    
    </form>

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