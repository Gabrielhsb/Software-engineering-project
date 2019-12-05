
<?php
//Definição da classe favorito
  class Favoritos{
    var $id_clientes;
    var $id_cards;

  function __construct($vid_clientes, $vid_cards) {
		$this->id_clientes = $vid_clientes;
		$this->id_cards = $vid_cards;
    
	}
    

  function getId_cards() {return $this->id_cards;}
  function getId_clientes() {return $this->id_clientes;}
  
  function setId($vid) {$this->id_clientes = $vid_clientes;}
  function setNome($vnome) {$this->id_cards = $vid_cards;}
 

 }

?>
