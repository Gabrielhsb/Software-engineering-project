<?php
  //incluido arquivos necessarios
  include_once("../Model/Card.php") ;
  include_once("../Persistence/Connection.php");
  include_once("../Persistence/CardDAO.php");
  
//iniciando instacias da classe card e connection
  $cards = new Cards (NULL, $_POST["imagem"], $_POST["nome"], $_POST["preço"], $_POST["raridade"], $_POST["descriçao"]);
  $conexao = new Connection ("localhost", "root", "", "corporação_kaiba");
  $conexao->conectar();
//chamando função para cadastrar
  $cardsdao = new CardsDAO();
  $cardsdao->cadastrar($cards, $conexao->getLink());



?>