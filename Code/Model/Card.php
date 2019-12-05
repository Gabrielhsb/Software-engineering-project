<?php
//Definição da classe card
  class Cards{
    var $id;
    var $imagem;
    var $nome;
    var $preço;
    var $raridade;
    var $descricao;

  function __construct($vid, $vimagem, $vnome, $vpreço, $vraridade, $vdescriçao) {
		$this->id = $vid;
		$this->imagem = $vimagem;
		$this->nome = $vnome;
    $this->preço = $vpreço;
    $this->raridade = $vraridade;
    $this->descriçao = $vdescriçao;
	}
    



  function getId() {return $this->id;}
  function getNome() {return $this->nome;}
  function getImagem() {return $this->imagem;}
  function getPreço() {return $this->preço;}
  function getRaridade() {return $this->raridade;}
  function getDescriçao() {return $this->descriçao;}

  
  function setId($vid) {$this->id = $vid;}
  function setNome($vnome) {$this->nome = $vnome;}
  function setImagem($vimagem) {$this->imagem = $vimagem;}
  function setPreço($vpreço) {$this->preço = $vpreço;}
  function setRaridade($vraridade) {$this->raridade = $vraridade;}
  function setDescriçao($vdescriçao) {$this->descriçao = $vdescriçao;}








 }






?>
