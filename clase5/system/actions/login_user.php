<?php

session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$password = md5($password);

include '../db/conexion.php';

$result = $conexion->query("SELECT * FROM usuarios WHERE email = '$email' and password = '$password' LIMIT 1");

if ($result->num_rows <= 0) {
  header("Location: http://localhost:8080/login.php");
}

$user = $result->fetch_assoc();
$conexion->close();


$_SESSION['id'] = $user['id'];
$_SESSION['nombre'] = $user['nombre'];
$_SESSION['email'] = $user['email'];
header("Location: http://localhost:8080/index.php");
