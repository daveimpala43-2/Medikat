<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    
    require_once('layouts/head.php');
    
    ?>

        <title>Login</title>
</head>

<body>

    
    <div class="productos">
        <?php
        $sql = "SELECT a.*, b.ruta, b.tipo FROM producto a, contenido b WHERE a.id=b.id_produc";
        $val = $db->query($sql);
        $si = $val->fetchAll();
            foreach($si as $value){
        ?>
            <div class="Cproduc">
                
                <div class="imagenP">
                    <img src="<?php echo $value['4']."/".$value['0'].".".$value['5'] ?>" alt="" width="150px" height="150px">
                </div>
                <div class="infoP">
                <p><?php echo $value['1'] ?></p>
                <a class="btn btn-info">Ver mas</a>
                <a class="btn btn-info">Cotizar</a>
                </div>
                
            </div>
        <?php
            }
        ?>
    </div>

</body>
<?php
 require_once('layouts/footer.php');
?>

</html>