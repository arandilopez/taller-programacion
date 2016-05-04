<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}
?>
<?php require __DIR__.'/system/partials/header.php'; ?>

<div class="container">
  <div class="row">
    <h3>Nuevo Producto</h3>
    <form class="form-horizontal" action="/system/actions/productos/crear.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" rows="3" cols="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" name="precio" class="form-control">
      </div>
      <div class="form-group">
        <label for="existencias">Existencias:</label>
        <input type="number" name="existencias" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" name="save" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>

<?php require __DIR__.'/system/partials/footer.php'; ?>
