<?php

session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}

$usuario_id = (int) $_SESSION['id'];
include '../../db/conexion.php';

$result = $conexion->query("SELECT COUNT(*) FROM producto_usuario WHERE usuario_id = $usuario_id;");

if (!$result) {
  http_response_code(500);
  echo "Error: " . $conexion->error;
  exit(0);
}

$res = $result->fetch_array();

$numero_compras = $res[0];

print_r($numero_compras);
