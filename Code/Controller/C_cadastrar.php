<?php 
//Conexão
require_once '../Persistence/Connection.php';
//Sessão
  session_start();
  $erros = array();
  $connect = mysqli_connect("localhost","root","","corporação_kaiba");
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);
  $rSenha = mysqli_escape_string($connect, $_POST['repetirSenha']);

  if($senha != $rSenha):
    $_SESSION['mensagem'] = "<li> ERRO senhas não conferem </li>";
    header('Location: ../View/Cadastrar_login.php?');
  
  else:
      if(empty($nome) or empty($login) or empty($senha) or empty($rSenha)):
        $_SESSION['mensagem'] = "<li>Os campos precisam ser preenchidos!</li>";
        header('Location: ../View/Cadastrar_login.php?');
      else:
        $sql = "SELECT email FROM clientes WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
          $_SESSION['mensagem'] = "<li>Email já cadastrado!</li>";
          header('Location: ../View/Cadastrar_login.php?');
        else:
          $senha = md5($senha);
          $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$login', '$senha')";
          if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: ../index.php?');
          else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../View/Cadastrar_login.php?');
          endif;
        endif;
      endif;
    endif;
?>