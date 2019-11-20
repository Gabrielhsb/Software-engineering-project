<?php
  require_once 'db_connect_login.php';
  session_start();
  //verificação se o usuario esta logado
  if(!isset($_SESSION['logado'])):
    header('Location: $name');
  endif;

  //dados
  $id = $_SESSION['id_usuario'];
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
  mysqli_close($connect);

  if($dados['email'] === 'adm2' or $dados['email'] === 'adm'):
    $name = '../index.php';
  else:
    $name = '../index_usuario.php';
  endif;
?>


<!DOCTYPE html>
<?php
include_once 'includes/header.php';
?>

      <body>

      <div class="nabar-fixed">
<nav>
<div class="nav-wrapper  indigo darken-3">
<a href="../index.php" class="brand-logo center">Kaiba Corporation</a>
<ul id="nav-mobile" class="right hide-on-med-and-down" >
    <li><div class="divider"></div></li>
  </ul>  
  </li>
</ul>

</nav>
      </div>
        <div class="row valing-wrapper " style="margin-top: 150px;">
          <div class="col s12 m6 push-m3 center container">
          <div class="card blue-grey darken-1 center" class="z-depth-3 " >
            <div class="card-content white-text row " >
            <a href="#user"><img style="max-width: 150px;"class="circle" src="includes/SK.jpg"></a>
              <span class="card-title"><?php echo $dados['nome']; ?></span>
              <p align='justify'>Kaiba é o maior acionista e Presidente de sua própria empresa multinacional, Corporação Kaiba. Arrogante e egocêntrico, Kaiba pretende tornar-se novamente o maior duelista do mundo; para isso, ele precisa derrotar Yugi Muto.
                Uma das principais características de Kaiba é absolutamente desacreditar no coração das cartas e nos poderes místicos geralmente usados na série; ele se convence de que são apenas truques e ilusões. 
                Ele também tem um certo desprezo pelos amigos de Yugi; refere-se a eles como dweeb patrol e geek squad.</p>
            </div>
            <div class="card-action">
              <a href="#">Editar perfil</a>
              <a href="<?php echo $name; ?>">Voltar</a>
              <a href="logout.php">Sair</a>
            </div>
          </div>
        </div>
      </div>
    </body>
  
<?php
include_once 'includes/footer.php';
?>
