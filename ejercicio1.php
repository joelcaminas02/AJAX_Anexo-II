<?php

use LDAP\Result;

session_start();
$opciones = array(

PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_PERSISTENT => true

);

$pdo = new PDO(

'mysql:host=localhost;dbname=usuarios;charset=utf8',

'root',

'sa',

$opciones);

$resultado = $pdo->query("SELECT nombre, correo FROM usuario");
$resultado->execute();
$ola = $resultado->fetch(PDO::FETCH_ASSOC);
print_r($ola);
?>

