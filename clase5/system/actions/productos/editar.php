<?php

session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}

include '../../db/conexion.php';

$id = (int) $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$precio = (real) $_REQUEST['precio'];
$descripcion = $_REQUEST['descripcion'];
$existencias = (int) $_REQUEST['existencias'];

$result = $conexion->query("UPDATE productos SET nombre='$nombre', precio=$precio, descripcion='$descripcion', existencias='$existencias' WHERE id = $id;");

if (!$result) {
  echo "Error: " . $conexion->error;
  exit(0);
}

$conexion->close();

header('Location: http://localhost:8080/index.php');
