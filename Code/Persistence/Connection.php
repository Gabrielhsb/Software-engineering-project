<?php
	class Connection {
		var $servidor;
		var $user;
		var $senha;
		var $bd;
		var $link;
		
		function __construct($vservidor, $vuser, $vsenha, $vbd) {
			$this->servidor = $vservidor;
			$this->user = $vuser;
			$this->senha = $vsenha;
			$this->bd = $vbd;
		}
		
		function conectar() {
			if(!$this->link) {
				$this->link = mysqli_connect($this->servidor, $this->user, $this->senha, $this->bd);
				if(!$this->link) {die("ERRO ao CONECTAR NO BD.<br />");}
			}
		}
		
		function fechar() {mysqli_close($this->link);}
		
		function getLink() {return $this->link;}
	}
?>