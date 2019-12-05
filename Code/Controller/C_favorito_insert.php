<?php 


  //incluido arquivos necessarios
  require_once "../Persistence/FavoritoDAO.php";

  $favorito = new Favoritos($_POST['id'], $_SESSION['id_usuario']);
  $conexao = new Connection ("localhost", "root", "", "corporação_kaiba");
  $conexao->conectar();
  $favdao = new favoritoDAO();
  $favdao->cadastrar($_POST['id'], $_SESSION['id_usuario']);
          
      
?>