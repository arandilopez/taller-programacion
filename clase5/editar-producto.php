<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}

include 'system/db/conexion.php';

$id = $_REQUEST['id'];
$result = $conexion->query("SELECT * FROM productos WHERE id = $id LIMIT 1;");
$producto = $result->fetch_assoc();

?>
<?php require __DIR__.'/system/partials/header.php'; ?>

<div class="container">
  <div class="row">
    <h3>Editar Producto</h3>
    <form class="form-horizontal" action="/system/actions/productos/editar.php" method="post">
      <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $producto['nombre']; ?>">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" rows="3" cols="10" class="form-control"><?php echo $producto['descripcion']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" name="precio" class="form-control" value="<?php echo $producto['precio']; ?>">
      </div>
      <div class="form-group">
        <label for="existencias">Existencias:</label>
        <input type="number" name="existencias" class="form-control" value="<?php echo $producto['existencias']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" name="save" class="btn btn-primary">Actualizar</button>
      </div>
    </form>
  </div>
</div>

<?php require __DIR__.'/system/partials/footer.php'; ?>
