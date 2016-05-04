var numero_compras = 0;
$(document).ready(function () {
  $('button.button-comprar').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('producto-id');
    $.post('http://localhost:8080/system/actions/productos/comprar.php', {producto_id: id}, function (response) {
      console.log(response);
      alert('Añadido a carrito');
    });
  });
});

function actualizarNumeroCompras() {

}
