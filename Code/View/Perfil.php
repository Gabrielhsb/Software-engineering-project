
<?php
  require_once '../Persistence/connection.php';
  session_start();
  //verificação se o usuario esta logado
  //dados
  $connect = mysqli_connect("localhost","root","","corporação_kaiba");
  $id = $_SESSION['id_usuario'];
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
  mysqli_close($connect);
?>
<!--Cabeçalho dos arquivos html-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Importando icones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importando materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Informar ao navegador que o site é otimizado para celular-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>


  <body>

<div class="nabar-fixed">
<nav>
<div class="nav-wrapper  indigo darken-3">
<a href="" class="brand-logo center">Kaiba Corporation</a>
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
      <a href="#user"><img style="max-width: 150px;"class="circle" src="https://scontent.fvag4-1.fna.fbcdn.net/v/t1.0-9/p960x960/69493600_2401762126574517_8095528760389926912_o.jpg?_nc_cat=106&_nc_eui2=AeGUz_Dimja9xFOHkVt0EPpM5HVgmyn8mpBZYSjxu1VzVOZPDPKVQG7C1Y1NyVmbqMzxy5cXFzM4jGpOQhjF06Oh5T-T7iFVPKNOFtSdQ-N50Q&_nc_ohc=hVnZIIZPXDQAQlfrLMXjc2WCxPwqhrtzTwgZIWK8hLgXzskr9ganhefBQ&_nc_ht=scontent.fvag4-1.fna&oh=285836909791d7974cafd62f3c4b3891&oe=5E85B65C"></a>
        <span class="card-title"><?php echo $dados['nome']; ?></span>
        <p align='justify'>Kaiba é o maior acionista e Presidente de sua própria empresa multinacional, Corporação Kaiba. Arrogante e egocêntrico, Kaiba pretende tornar-se novamente o maior duelista do mundo; para isso, ele precisa derrotar Yugi Muto.
          Uma das principais características de Kaiba é absolutamente desacreditar no coração das cartas e nos poderes místicos geralmente usados na série; ele se convence de que são apenas truques e ilusões. 
          Ele também tem um certo desprezo pelos amigos de Yugi; refere-se a eles como dweeb patrol e geek squad.</p>
      </div>
      <div class="card-action">
        <a href="#"><i class="material-icons">list</i></a>
        <a href="../View/inicial.php"><i class="material-icons">search</i></a>
        <a href="../Controller/C_logout.php">Sair</a>
      </div>
    </div>
  </div>
</div>
</body>

<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
     });     
</script>
<script> M.AutoInit(); </script>
</body>
</html>