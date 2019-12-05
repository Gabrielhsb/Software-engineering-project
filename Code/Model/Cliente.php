<?php
//Definição da classe cliente
  class Clientes{
    var $id;
    var $nome;
    var $email;
    var $senha;

  function __construct($vid, $vnome, $vemail, $vsenha) {
		$this->id = $vid;
		$this->nome = $vnome;
    $this->email = $vemail;
    $this->senha = $vsenha;
 
	}
    

  function getId() {return $this->id;}
  function getNome() {return $this->nome;}
  function getEmail() {return $this->email;}
  function getsenha() {return $this->senha;}
  
  function setId($vid) {$this->id = $vid;}
  function setNome($vnome) {$this->nome = $vnome;}
  function setemail($vemail) {$this->email = $vemail;}
  function setsenha($vsenha) {$this->senha = $vsenha;}


 }






?>
