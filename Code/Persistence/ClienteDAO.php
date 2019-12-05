<?php
//Definição da classe clienteDAO e suas funçoes
  include_once("../Model/Cliente.php");

  class clienteDAO {
		function cadastrar($nome, $login, $senha, $connect) {
			$sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$login', '$senha')";
          if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: ../index.php?');
          else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
						header('Location: ../View/Cadastrar_login.php?');
					endif;
	}
}
?>