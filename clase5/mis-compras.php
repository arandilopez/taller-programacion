<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: http://localhost:8080/index.php');
}
?>
<?php require __DIR__.'/system/partials/header.php'; ?>

<?php include __DIR__.'/system/actions/productos/compras-usuario.php'; ?>

<div class="container">
  <div class="row">
    <pre>
      <?php var_dump($productos); ?>
    </pre>
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0; ?>
          <?php foreach ($productos as $producto):?>
            <?php $total += (real) $producto['precio']; ?>
          <tr>
            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo $producto['descripcion']; ?></td>
            <td>$<?php echo $producto['precio']; ?></td>
            <td>
              <form action="/system/actions/productos/eliminar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                <button type="submit" name="delete" class="btn btn-sm btn-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                </button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <p class="text-right lead">
        Total: $<?php echo number_format($total, 2); ?>
      </p>
    </div>
  </div>
</div>

<?php require __DIR__.'/system/partials/scripts.php'; ?>
<?php require __DIR__.'/system/partials/footer.php'; ?>
