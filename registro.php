<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    require_once('layouts/head.php');
    ?>

        <title>Registro</title>
</head>

<body>
        <div class="formu">

            <div class="registroU">
                <div class="form-group nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                    <label for="ape1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ape1" id="ape1">
                </div>
                <div class="espacod">

                </div>
                <div class="espaci">

                </div>
                <div clas="form-group apes">
                    <label for="ape2">Apellido Materno</label>
                    <input type="text" class="form-control" name="ape2" id="ape2">
                    <label for="tele">Telefono</label>
                    <input type="text" class="form-control" name="tele" id="tele">
                </div>
                <div class="espacod">

                </div>
                <div class="espaci">
                </div>
                <div class="form-group emailG">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="Registrame">
                    <button class="btn btn-primary" id="registrar">Registrar</button>
                </div>
            </div>

        </div>
</body>
<?php
 require_once('layouts/footer.php');
  ?>

</html>