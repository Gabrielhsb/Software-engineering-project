<?php 

//Conexão
require_once 'db_connect_login.php';
//Sessão
session_start();

if(isset($_POST['btn-entrar'])):
  $erros = array();
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);
  $rSenha = mysqli_escape_string($connect, $_POST['repetirSenha']);
  if($senha != $rSenha):
    $erros[] = "<li> ERRO senhas não conferem </li>";
  
  else:
      if(empty($nome) or empty($login) or empty($senha) or empty($rSenha)):
        $erros[] = "<li>Os campos precisam ser preenchidos!</li>";
      else:
        $sql = "SELECT email FROM clientes WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
          $erros[] = "<li>Email já cadastrado!</li>";

        else:
          $senha = md5($senha);
          $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$login', '$senha')";

          if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: login.php?');
          else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: locadastrar.php?');
          endif;
        endif;
      endif;
    endif;
endif;

?>

<?php
include_once 'includes/header.php';
?>
       <div class="row">
      <div class="col s12 m6 push-m3 ">
      <title>Cadastro</title>

      <meta charset="utf-8">
  
      <h3 class="light">Cadastre-se</h3>
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
          <input type="text" name="nome"><br>
          <label for="nome">Nome</label>
        </div>
      <div class="input-field col s12">
          <input type="text" name="login"><br>
          <label for="nome">Email</label>
        </div>
      <div class="input-field col s12">
          <input type="password" name="senha"><br>
          <label for="nome">Senha</label>
        </div>
        <div class="input-field col s12">
          <input type="password" name="repetirSenha"><br>
          <label for="nome">Repetir Senha</label>
        </div>
          <button type="Submit" name="btn-entrar" class="btn"> <i class="material-icons left">done</i> Entrar</button>
          <a href="login.php">Voltar</a>
          </div>
    
    </form>
<?php
include_once 'includes/footer.php';
?>