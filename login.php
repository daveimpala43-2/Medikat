<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    
    require_once('layouts/head.php');
    if(isset($_SESSION['user'])){
        header("Location: index.php");
        }
        else{
        
    ?>

        <title>Login</title>
</head>

<body>
    <div class="formuL">
        <div class="registroUL">
            <div class="form-group nombre">
                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email" id="email">
                <br>
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass">
            </div>

            <div class="form-group Boton">
                <button class="btn btn-primary" id="login">Login</button>
                <h6>¿Aun no tienes cuenta?</h6>
                <h5>
                    <a href="registro.php">Registrate</a>
                </h5>
            </div>

        </div>
    </div>


</body>
<?php
 require_once('layouts/footer.php');
        }
?>

</html>