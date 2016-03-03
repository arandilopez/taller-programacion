var nombre = 'Arandi';

printNombre();

console.log(printNombre);

function cal(fun) {
  fun.call();
}

// cal(printNombre);


function Persona (name, age) {
  this.name = name;
  this.age = age;
}
Persona.prototype.getName = function () {
  return this.name;
};

var arandi = new Persona('Arandi Lopez', 22);

console.log(arandi);
console.log(arandi.name);
console.log(arandi.getName());

var juan = {
  name: 'Juan',
  age: 42,
  getName: function () {
    return this.name;
  }
};

console.log(juan);
console.log(juan.name);
console.log(juan.getName());

juan.lastName = 'Perez';
console.log(juan.lastName);
console.log(juan);

for (var variable in arandi) {
  if (juan.hasOwnProperty(variable)) {
    console.log(variable);
  }
}

$(document).ready(function () {
  $('button[name="alertMe"]').on('click', function (e) {
    showPerson();
  });
  function showPerson() {
    // var inputNombre = document.querySelector('input[name="nombre"]');
    var nombre = $('input[name="nombre"]').val();
    // var inputApellido = document.querySelector('input[name="apellido"]');
    var apellido = $('input[name="apellido"]').val();
    // var nombre = inputNombre.value;
    // var apellido = inputApellido.value;

    alert(nombre + ' ' + apellido);
  }

  function printNombre () {
    alert(nombre);
  }
});
