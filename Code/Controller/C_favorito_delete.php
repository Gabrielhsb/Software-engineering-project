<?php  
  //incluido arquivos necessarios
  require_once "../Persistence/Connection.php";
  require_once "../Persistence/FavoritoDAO.php";
  
  $favorito = new FavoritoDAO();
  $conexao = new Connection ("localhost", "root", "", "corporação_kaiba");
  $conexao->conectar();

  $favorito->excluir($_POST['id'], $_SESSION['id_usuario'], $conexao->getLink());
  

?>