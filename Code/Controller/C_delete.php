<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/CardDAO.php");
	
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	
	$cardsdao = new cardsDao();
	$cardsdao->excluir($_POST["id"], $conexao->getLink());
?>