<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/CardDAO.php");
	session_start();
  $conexao = mysqli_connect("localhost","root","","corporação_kaiba");
  $id=  $_POST['id'];
  $usuario = $_SESSION['id_usuario']; 
  $query = "DELETE FROM favoritos WHERE id_cards='$id' AND id_clientes ='$usuario'";
			if(mysqli_query($conexao, $query)) {
				header('Location: ../Controller/C_listar_favoritos.php?');
	
      }
      else{
        die("ERRO. cards NÃO removido.<br /><br /><a href=\"../Controller/C_listar.php\">VOLTAR</a>");
        
      }	
?>