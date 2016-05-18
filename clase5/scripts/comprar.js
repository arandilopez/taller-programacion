var numero_compras = 0;
$(document).ready(function () {

  actualizarNumeroCompras();

  $('button.button-comprar').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('producto-id');
    $.post('http://localhost:8080/system/actions/productos/comprar.php', {producto_id: id}, function (response) {
      // console.log(response);
      actualizarNumeroCompras();
      alert('Añadido a carrito');
    });
  });
});

function actualizarNumeroCompras() {
  $.getJSON('http://localhost:8080/system/actions/productos/compras.php', function (numero_compras) {
    console.log(numero_compras);
    $('#numero_compras').html(numero_compras);
  });
}
