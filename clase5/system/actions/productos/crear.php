<?php
include '../../db/conexion.php';

$nombre = $_REQUEST['nombre'];
$precio = (real) $_REQUEST['precio'];
$descripcion = $_REQUEST['descripcion'];
$existencias = (int) $_REQUEST['existencias'];

$result = $conexion->query("INSERT INTO productos (nombre, descripcion, precio, existencias) VALUES ('$nombre', '$descripcion', $precio, $existencias)");

if (!$result) {
  echo "Error: " . $conexion->error;
  exit(0);
}

header('Location: http://localhost:8080/index.php');
