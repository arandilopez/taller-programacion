$(document).ready(function () {

  $('#enviarBtn').on('click', function (event) {
    var correo = $('input[name="email"]').val();
    alert('Gracias por contactarnos. Ya hemos enviado tu mensaje ' + correo);
    $('input[name="email"]').val('');
    $('textarea[name="mensaje"]').val('');
  });

});
