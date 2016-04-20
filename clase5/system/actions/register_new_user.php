<?php

$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$password = md5($password);

$result = $conexion->query("INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password');");

if (!$result) {
  echo "Error: " . $conexion->error;
  exit(0);
}

mysqli_close($conexion);

header("Location: http://localhost:8080/index.php");
