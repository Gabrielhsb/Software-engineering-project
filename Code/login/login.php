

<?php

//conexão
require_once 'db_connect.php';

//Sessão
session_start();
//verificação
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if(empty($login) or empty($senha)):
      $erros[] = "<li> O campo Email/senha precisa ser preenchidos </li>";
    else:
        $sql = "SELECT email FROM clientes WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);


        if(mysqli_num_rows($resultado) > 0):
          $senha = md5($senha);
          $sql = "SELECT * FROM clientes WHERE email = '$login' AND senha ='$senha'";
          $resultado = mysqli_query($connect, $sql);
              if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('location: perfil.php');
              else:
                  $erros[] = "<li> Usuário e senha não conferem </li>";
              endif;

        else:
          $erros[] = "<li> Usuário inexistente </li>";
        endif;
    endif;
endif;
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
       <div class="row">
      <div class="col s12 m6 push-m3 ">
      <title>Login</title>

      <meta charset="utf-8">
  
      <h3 class="light">Login</h3>
    <?php 
        if(!empty($erros)):
          foreach($erros as $erro):
            echo $erro;
          endforeach;
        endif;
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="input-field col s12">
        <input type="text" name="login"><br>
        <label for="nome">Email</label>
      </div>
    <div class="input-field col s12">
        <input type="password" name="senha"><br>
        <label for="nome">Senha</label>
      </div>
        <button type="Submit" name="btn-entrar" class="btn"> <i class="material-icons left">done</i> Entrar</button>
        <a href="cadastrar.php">Cadastre-se</a>
        
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
       </div>
    </div>
    </body>
  </html>




