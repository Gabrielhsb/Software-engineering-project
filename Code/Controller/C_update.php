<?php
	include_once("../Model/Card.php");
	include_once("../Persistence/Connection.php");
	include_once("../Persistence/CardDAO.php");
	
	$Cards = new Cards($_POST["id"], $_POST["imagem"], $_POST["nome"], $_POST["preço"],$_POST["raridade"], $_POST["descrição"]);
	
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	
	$Cardsdao = new CardsDao();
	$Cardsdao->alterar($Cards, $conexao->getLink());
?>