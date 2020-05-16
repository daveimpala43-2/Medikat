<?php
function getcon(){
    $usuario = "medikat";
    $contraseña = "Me3adisdfkatdj37d";
    try {
        $mbd = new PDO('mysql:host=localhost;dbname=medikat', $usuario, $contraseña,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $mbd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $mbd;
    }