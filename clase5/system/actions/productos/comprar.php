<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}

$usuario_id = (int) $_SESSION['id'];
$producto_id = (int) $_REQUEST['producto_id'];

include '../../db/conexion.php';

$result = $conexion->query("INSERT INTO producto_usuario (usuario_id, producto_id) VALUES ($usuario_id, $producto_id);");

if (!$result) {
  http_response_code(500);
  print_r("Error: " . $conexion->error);
  exit(0);
}

print_r("true");
