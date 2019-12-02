<?php

  include_once("../Model/Card.php") ;
  include_once("../Persistence/Connection.php");
  include_once("../Persistence/CardDAO.php");
  $cards = new Cards (NULL, $_POST["imagem"], $_POST["nome"], $_POST["preço"], $_POST["raridade"], $_POST["descricao"]);
  $conexao = new Connection ("localhost", "root", "", "corporação_kaiba");
  $conexao->conectar();

  $cardsdao = new CardsDAO();
  $cardsdao->cadastrar($cards, $conexao->getLink());



?>