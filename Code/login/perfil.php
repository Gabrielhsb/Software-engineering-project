<?php
require_once 'db_connect.php';

session_start();
//verificação
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;
//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM clientes WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>



    <div class="row">
      <div class="col s12 m6 push-m3 ">
      <div class="card blue-grey darken-1" class="z-depth-3">
        <div class="card-content white-text row">
        <a href="#user"><img style="max-width: 150px;"class="circle" src="includes/SK.jpg"></a>
          <span class="card-title"><?php echo $dados['nome']; ?></span>
          <p>Presidente da corporação Kaiba!</p>
        </div>
        <div class="card-action">
          <a href="#">Editar perfil</a>
          <a href="../index.php">Voltar</a>
          <a href="logout.php">Sair</a>
        </div>
      </div>
    </div>
  </div>
</html>