<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/bootstrap.css" media="screen" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-4 col-md-offset-4 col-md-4 col-sm-4">
          <h3>Registrate</h3>
          <form class="form-horizontal" action="system/actions/register_new_user.php" method="post">
            <div class="form-group">
              <input type="text" name="nombre" value="" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" name="email" value="" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" name="save" class="btn btn-block btn-primary">
                Registrarme
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
