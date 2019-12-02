<?php
  include_once("../Model/Card.php");

  class cardsDAO {
		function cadastrar($cards, $link) {
			$query = "INSERT INTO cards (imagem, nome, preço, raridade, descriçao) values ('".($cards->getImagem())."','".($cards->getNome())."','".($cards->getPreço())."', '".($cards->getRaridade())."', '".($cards->getDescriçao())."')";
			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../view/excluirCards.php\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/cadastrarcards.php\">VOLTAR</a>";
		} 
		
		function excluir($id, $link) {
			$query = "DELETE FROM cards WHERE id=".($id);
			if(!mysqli_query($link, $query)) {
				die("ERRO. cards NÃO EXCLUIDO.<br /><br /><a href=\"../Controller/C_listar.php\">VOLTAR</a>");
	
			}
			echo "cards EXCLUIDO.<br /><br /><a href=\"../view/excluirCards.php\">VOLTAR</a>";
			header('Location: ../Controller/C_listar.php?');
		}
		
		function consultar($nome, $link) {
			
			$query = "SELECT * FROM cards WHERE nome='$nome'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. cards NÃO ENCONTRADO.<br /><br /><a href=\"../view/excluirCards.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarAll($link) {
			$query = "SELECT * FROM cards";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. Não tem cards cadastrados.<br /><br /><a href=\"../view/excluirCards.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarN($nome, $link) {
			$query = "SELECT * FROM cards WHERE nome ='".($nome)."'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUM cards ENCONTRADO.<br /><br /><a href=\"../view/excluirCards.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($cards, $link) {
			$query = "UPDATE cards set id='".($cards->getId())."', imagem='".($cards->getimagem())."', nome='".($cards->getNome())."', preço='".($cards->getpreço())."', raridade='".($cards->getraridade())."', descriçao='".($cards->getdescriçao())."' WHERE id='$cards->id'";
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCards.php\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarCards.php\">VOLTAR</a>";
			header('Location: ../Controller/C_listar.php?');
		}
	}

?>