<?php
session_start();
require_once("../Modelo/config.php");
$nombr =$_SESSION['nombre'];
$password = $_SESSION['password'];
session_destroy();

$casService = 'https://192.168.1.2:8443/cas';
$thisService = 'http://localhost:8888/sacfinals/index.php';

if(isset($_SESSION['correo'])){

header("Location: $casService/logout?service=$thisService");

}else{
header("Location: http://localhost:8888/sacfinals");

}

?>
