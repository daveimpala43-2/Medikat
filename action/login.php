<?php
include ('conection.php');
$db= getcon();
session_start();
$email= $_POST['email'];
$pass = $_POST['pass'];
$sql = "SELECT password, id FROM user WHERE email = '$email'";
$val = $db->query($sql);
$si = $val->fetch();
if(password_verify ( $pass , $si['0'] )){
    echo "1";
    $_SESSION['user'] = $si[1];
}
else{
    echo "2";
}
