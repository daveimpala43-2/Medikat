<?php
include ('conection.php');
$db= getcon();
$email= $_POST['email'];
$sql = "SELECT COUNT(*) FROM user WHERE email = '$email'";
$val = $db->query($sql);
$si = $val->fetch();
if($si[0] == 0){
    $nom = $_POST['nom'];
    $ape1=$_POST['ape1'];
    $ape2=$_POST['ape2'];
    $tele=$_POST['tele'];
    $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (`nom`, `ape1`, `ape2`, `email`, `telefono`,`password`) VALUES ('$nom','$ape1','$ape2','$email','$tele','$pass')";
    
    try {
        $val = $db->query($sql);
         echo "1";
    }
      catch(PDOException $e){
          echo "3";
       }
}
else{
    echo "2";
}
