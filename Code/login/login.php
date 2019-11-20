

<?php

//conexão
require_once 'db_connect_login.php';

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
                $_SESSION['nome'] = $dados['nome'];
                header('location: ../index_usuario.php');
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
<?php
include_once 'includes/header.php';
?>
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
<?php
include_once 'includes/footer.php';
?>

