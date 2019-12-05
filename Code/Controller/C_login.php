<?php
//incluido arquivos necessarios
    require_once '../Persistence/Connection.php';
    //iniciando sessão
    session_start();
   
    $conectar = mysqli_connect("localhost","root","","corporação_kaiba");
    $login = mysqli_escape_string($conectar, $_POST['login']);
    $senha = mysqli_escape_string($conectar, $_POST['senha']);
    if(empty($login) or empty($senha)):
      $_SESSION["mensagem"] = "<li> O campo Email/senha precisa ser preenchidos </li>";
    else:
        $sql = "SELECT email FROM clientes WHERE email = '$login'";
        $resultado = mysqli_query($conectar, $sql);
        if(mysqli_num_rows($resultado) > 0):
          $senha = md5($senha);
          $sql = "SELECT * FROM clientes WHERE email = '$login' AND senha ='$senha'";
          $resultado = mysqli_query($conectar, $sql);
              if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($conectar);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                echo $_SESSION['id_usuario'];
                $_SESSION['nome'] = $dados['nome'];
                $_SESSION['email'] = $_POST['login'];
                header('location: ../View/perfil.php');
              else:
                  $_SESSION["mensagem"] = "<li> Usuário e senha não conferem </li>";
              endif;
        else:
          $_SESSION["mensagem"] = "<li> Usuário inexistente </li>";
        endif;
    endif;
  
  if(!empty($_SESSION["mensagem"])):
    header('Location: ../index.php?');
  endif;
?>