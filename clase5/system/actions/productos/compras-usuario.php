<?php
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}

$usuario_id = (int) $_SESSION['id'];
include __DIR__.'/../../db/conexion.php';

$result = $conexion->query("SELECT *, producto_usuario.id AS compra_id FROM producto_usuario INNER JOIN productos ON producto_usuario.producto_id = productos.id WHERE producto_usuario.usuario_id = $usuario_id;");

if (!$result) {
  http_response_code(500);
  echo "Error: " . $conexion->error;
  exit(0);
}

$productos = [];

while ($datos = $result->fetch_assoc()) {
  array_push($productos, $datos);
}
