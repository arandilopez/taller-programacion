<?php
  session_start();

  require __DIR__.'/system/actions/productos/listar.php';
?>
<?php require __DIR__.'/system/partials/header.php'; ?>

  <div class="container">
    <!-- navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <?php
            if (isset($_SESSION['nombre'])) {
              echo $_SESSION['nombre'];
            } else {
              echo "Anonimo";
            }
            ?>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="about.php">Acerca de mi</a></li>
            <li><a href="contact.php">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/mis-compras.php">
                  <i class="glyphicon glyphicon-shopping-cart" style="font-size: 18px;"></i>
                  <span class="label label-danger" id="numero_compras"></span>
              </a>
            </li>
            <?php if ( isset($_SESSION['nombre']) ): ?>
              <li><a href="system/actions/logout.php">Cerrar sesión</a></li>
            <?php else: ?>
              <li><a href="login.php">Iniciar sesión</a></li>
            <?php endif; ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
      <?php foreach($productos as $producto): ?>
      <div class="col-md-3 col-sm-4">
        <div class="thumbnail">
          <img src="http://lorempixel.com/400/400" alt="...">
          <div class="caption">
            <h3>
              <?php echo $producto['nombre']; ?>
            </h3>
            <h4><span class="text-success"><?php echo "$ ".$producto['precio']; ?></span></h4>
            <p><?php echo $producto['descripcion'] ?></p>

            <p>
              <button type="button" name="comprar" class="btn btn-primary button-comprar" data-producto-id="<?php echo $producto['id']; ?>">Comprar</button>
              <?php if (isset($_SESSION['id'])):?>
              <a href="http://localhost:8080/editar-producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-default" role="button">Editar</a>
              <?php endif; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  <?php require __DIR__.'/system/partials/scripts.php'; ?>
  <script src="/scripts/comprar.js" charset="utf-8"></script>
  <?php require __DIR__.'/system/partials/footer.php'; ?>
