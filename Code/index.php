<?php
include_once 'includes/header.php';
?>
<div class="nav-wrapper deep-purple darken-2">
<nav class="center nav-wrapper deep-purple darken-2"> <h3>Kaiba Corporation</h3></nav>
<a href="#" class="sidenav-trigger" data-target="menu-side">
  <i class="material-icons">menu</i>
  </a>

<ul class="sidenav" id="menu-side">
<li><div class="user-view">
      <div class="background">
        <img src="includes/adds/YU.jpg" width=300 height=170>
      </div>
      <a href="#user"><img class="circle"   src="includes/adds/SK.jpg"></a>
      <a href="#name"><span class="white-text name">Seto Kaiba</span></a>
      <a href="#email"><span class="white-text email">kaiba@coporation.com</span></a>

    </div></li>
    <li><a href="login/perfil.php"><i class="material-icons">face</i>Perfil</a></li>
    <li><a href="adicionar.php"><i class="material-icons">edit</i>Adicionar card</a></li>
    <li><div class="divider"></div></li>
  </ul>
  
  
  </li>
</ul>
</div>


<div class="row">
  <div class="col s12 m6 push-m3 ">
  <h3 class="light">Cards</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Raridade</th>
          <th>Descrição</th>
          
        </tr>
      </thead>
    <tbody>
      <tr>
        <td> <img src="includes/adds/db.jpg" width=120 height=200></td>
        <td>Dragão Branco</td>
        <td>$200</td>
        <td>6</td>
        <td>Uma das cartas mais raras!</td>

        <td> <a href=""class="btn-floating green"> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href=""class="btn-floating red"><i class="material-icons ">delete</i></a> </td>  

      </tr>

      <tr>
        <td> <img src="includes/adds/mn.jpg" width=120 height=200></td>
        <td>Mago Negro</td>
        <td>$40</td>
        <td>6</td>
        <td>Brabo</td>

        <td> <a href=""class="btn-floating green"> <i class="material-icons ">edit</i></a> </td>  
        <td> <a href=""class="btn-floating red"><i class="material-icons ">create</i></a> </td>  

      </tr>
    </tbody>
    </table>
    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>