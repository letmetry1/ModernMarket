// Obtener los botones "Agregar al carrito"
const botonesAgregar = document.querySelectorAll('.boton-agregar');

// Añadir un evento "click" a cada botón "Agregar al carrito"
botonesAgregar.forEach(boton => {
  boton.addEventListener('click', agregarAlCarrito);
});

// Función que se ejecuta al hacer clic en un botón "Agregar al carrito"
function agregarAlCarrito(evento) {
  // Obtener el nombre y el precio del producto
  const nombre = evento.target.dataset.nombre;
  const precio = evento.target.dataset.precio;

  // Crear un objeto para el producto
  const producto = {
    nombre: nombre,
    precio: precio,
    cantidad: 1
  };

  // Comprobar si el producto ya está en el carrito
  const elementosCarrito = document.querySelectorAll('#carrito li');
  elementosCarrito.forEach(elemento => {
    if (elemento.dataset.nombre === producto.nombre) {
      producto.cantidad = parseInt(elemento.dataset.cantidad) + 1;
      elemento.remove();
    }
  });

  // Crear un elemento "li" para el producto en el carrito
  const elementoCarrito = document.createElement('li');
  elementoCarrito.dataset.nombre = producto.nombre;
  elementoCarrito.dataset.precio = producto.precio;
  elementoCarrito.dataset.cantidad = producto.cantidad;
  elementoCarrito.innerHTML = `${producto.nombre} - Cantidad: ${producto.cantidad} - Precio: $${producto.precio}`;

  // Agregar el elemento "li" al carrito
  const carrito = document.querySelector('#carrito');
  carrito.appendChild(elementoCarrito);

  // Actualizar el total del carrito
  actualizarTotal();
}

// Función para actualizar el total del carrito
function actualizarTotal() {
  // Obtener todos los elementos del carrito
  const elementosCarrito = document.querySelectorAll('#carrito li');

  // Calcular el total del carrito
  let total = 0;
  elementosCarrito.forEach(elemento => {
    total += parseFloat(elemento.dataset.precio) * parseInt(elemento.dataset.cantidad);
  });

  // Actualizar el total en la página
  const elementoTotal = document.querySelector('#total');
  elementoTotal.innerText = `$${total.toFixed(2)}`;
}

// Añadir un evento "click" al botón "Pagar"
const botonPagar = document.querySelector('#boton-pagar');
botonPagar.addEventListener('click', pagar);

// Función que se ejecuta al hacer clic en el botón "Pagar"
function pagar() {
  // Obtener el total del carrito
  const total = parseFloat(document.querySelector('#total').innerText.replace('$', ''));

  // Si el total es cero, mostrar un mensaje de error
  if (total === 0) {
    alert('El carrito está vacío.');
    return;
  }

  // Mostrar un mensaje de éxito y vaciar el carrito
  alert(`Pago exitoso por $${total.toFixed(2)}`);
  const carrito = document.querySelector('#carrito');
  while (carrito.firstChild) {
    carrito.removeChild(carrito.firstChild);
  }
  actualizarTotal();
}
