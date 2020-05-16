<?php
include ('action/conection.php');
$db= getcon();
session_start();
if(isset($_SESSION['user'])){
$user = $_SESSION['user'];
}
else{
  $user="No";
}
$sql = "SELECT nom, ape1,ape2 FROM user WHERE id= '$user'";
$val = $db->query($sql);
$si = $val->fetch();
$name = $si[0]." ".$si[1]." ".$si[2];
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/ico" href="img/Logo.ico">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/funciones.js"></script>
<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="img-fluid logo" src="img/Logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link display-7" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle display-7" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Vestimenta Medica</a>
          <a class="dropdown-item" href="#">Equipo Medico</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Labroatorio</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link display-7" href="#">Sobre Nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(!is_numeric($user)){
      ?>

      <a class="btn btn-outline-dark my-2 my-sm-0" href="login.php" type="submit">Ingresar</a>
      <a class="btn btn-outline-dark my-2 my-sm-0 mx-2" href="registro.php" type="submit">Registrar</a>
      <?php
      }
      else{
      ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle display-7" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo "Hola! ".$name." " ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Cuenta</a>
              <a class="dropdown-item" href="action/logout.php" >Salir</a>
            </div>
          </li>
        </ul>
      </div>
      <?php
      }
      ?>
    </form>
  </div>
</nav>