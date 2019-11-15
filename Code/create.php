<?php 
//Sessão
session_start();
//conexao
require_once 'login/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $imagem = mysqli_escape_string($connect, $_POST['imagem']);
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $preço = mysqli_escape_string($connect, $_POST['preço']);
  $raridade = mysqli_escape_string($connect, $_POST['raridade']);
  $descrição = mysqli_escape_string($connect, $_POST['descrição']);

  $sql = "INSERT INTO cards (imagem, nome, preço, raridade, descriçao) VALUES ('$imagem', '$nome', '$preço', '$raridade', '$descrição') ";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
    header('Location: index.php?');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: index.php?');
  endif;
endif;