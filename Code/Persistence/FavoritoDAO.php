<?php
//Definição da classe FavoritoDAO e suas funçoes
  include_once("../Model/Favorito.php");
  require_once '../Persistence/Connection.php';
  session_start();

  class favoritoDAO {
		function cadastrar($id, $usuario) {
      $connect = mysqli_connect("localhost","root","","corporação_kaiba");
      $id_card = mysqli_escape_string($connect, $id);
      $id_cliente = mysqli_escape_string($connect,  $usuario);
      $sql = "INSERT INTO favoritos (Id_clientes, id_cards) VALUES ('$id_cliente', '$id_card')";
      echo var_dump($id_card);
      if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "inserido com sucesso!";
        header('Location: C_listar_cliente.php?');
      else:
        $_SESSION['mensagem'] = "Erro ao inserir!";
        
      endif;
		} 
		
		function excluir($id, $usuario, $link) {
      $query = "DELETE FROM favoritos WHERE id_cards='$id' AND id_clientes ='$usuario'";
			if(mysqli_query($link, $query)) {
				header('Location: ../Controller/C_listar_favoritos.php?');
      }
      else{
        die("ERRO. cards NÃO removido.<br /><br /><a href=\"../Controller/C_listar.php\">VOLTAR</a>");
        
      }	
		}
  }

?>