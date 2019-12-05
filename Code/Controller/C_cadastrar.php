<?php 
//Conexão
require_once '../Persistence/Connection.php';
require_once '../Persistence/ClienteDAO.php';
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
        $sql = "SELECT email FROM clientes WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
          $_SESSION['mensagem'] = "<li>Email já cadastrado!</li>";
          header('Location: ../View/Cadastrar_login.php?');
        else:
          $senha = md5($senha);
          $cliente = new ClienteDAO();
          $cliente->cadastrar($nome, $login ,$senha, $connect);
          endif;
        endif;
?>