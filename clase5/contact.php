<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Arandi López</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/bootstrap.css" media="screen" charset="utf-8">
</head>
<body>
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
          <a class="navbar-brand" href="#">Arandi</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Acerca de mi</a></li>
            <li class="active"><a href="contact.php">Contacto<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Iniciar sesión</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
      <div class="col-md-12">
        <h3>¡Contactanos!</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" rows="3" cols="15" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="button" name="enviar" class="btn btn-primary" id="enviarBtn">
              Enviar  <i class="glyphicon glyphicon-send"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="scripts/contact.js" charset="utf-8"></script>
</body>
</html>
