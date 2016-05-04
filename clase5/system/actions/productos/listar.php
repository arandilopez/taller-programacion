<?php

include __DIR__.'/../../db/conexion.php';

$result = $conexion->query("SELECT * FROM productos");

$productos = [];

while ($data = $result->fetch_assoc()) {
  array_push($productos, $data);
}
