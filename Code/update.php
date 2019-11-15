<?php 
//Sessão
session_start();
//conexao
require_once 'login/db_connect.php';

if(isset($_POST['btn-editar'])):
  $id = mysqli_escape_string($connect, $_POST['id']);
  $imagem = mysqli_escape_string($connect, $_POST['imagem']);
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $preço = mysqli_escape_string($connect, $_POST['preço']);
  $raridade = mysqli_escape_string($connect, $_POST['raridade']);
  $descrição = mysqli_escape_string($connect, $_POST['descrição']);

  $sql = "UPDATE cards SET imagem = '$imagem', nome = '$nome', preço = '$preço', raridade = '$raridade', descriçao = '$descrição' WHERE id = '$id' ";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com Sucesso!";
    header('Location: index.php?');
  else:
    $_SESSION['mensagem'] = "Erro ao Atualizar!";
    header('Location: index.php?');
  endif;
endif;