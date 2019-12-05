<?php
require_once '../Persistence/Connection.php';
require_once '../Persistence/CardsDAO.php';
session_start();
class TestCards extends PHPUnit\Framework\TestCase {

  public function testCadastrar(){
    $cards = new Cards (NULL, 'teste.com.br', 'O brabo', '800', '9', 'Brabo do brabo');
    $conexao = new Connection ("localhost", "root", "", "corporação_kaiba");
    $conexao->conectar();
    $cardsdao = new CardsDAO();
    $cardsdao->cadastrar($cards, $conexao->getLink());
    $this->assertEquals('Dados salvos', $_SESSION['mensagem']);
  }


  public function testExcluir(){
	$conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	$cardsdao = new cardsDao();
  $cardsdao->excluir(9, $conexao->getLink());
  $this->assertEquals('Card Excluido', $_SESSION['mensagem']);

  
  }

  public function testeBuscar(){
  $conexao = new Connection("localhost","root","","corporação_kaiba");
	$conexao->conectar();
	$cardsdao = new CardsDao();
	$resultado = $cardsdao->consultar('teste', $conexao->getLink());
  $linha = mysqli_fetch_row($resultado);
  if(empty($linha)){ 
    $_SESSION['mensagem'] = "Card não encontrado!";
    header('Location: ../View/inicial.php?');
  }

  $this->assertEquals('Card não encontrado!', $_SESSION['mensagem']);
}

}