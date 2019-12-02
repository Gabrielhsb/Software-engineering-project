<?php 
//Conexão
require_once '../Persistence/Connection.php';
session_start();
//Sessão
  $erros = array();
  $connect = mysqli_connect("localhost","root","","corporação_kaiba");
  $id_card = mysqli_escape_string($connect, $_POST['id']);
  $id_cliente = mysqli_escape_string($connect,  $_SESSION['id_usuario']);
  
  
          $sql = "INSERT INTO favoritos (Id_clientes, id_cards) VALUES ('$id_cliente', '$id_card')";
          if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "inserido com sucesso!";
            header('Location: C_listar_cliente.php?');
          else:
            $_SESSION['mensagem'] = "Erro ao inserir!";
            
          endif;
      
?>