// Variables globales
const botonAgregar = document.querySelectorAll(".boton-agregar");
const listaCarrito = document.querySelector("#carrito ul");
const totalCarrito = document.querySelector("#total");
const botonPagar = document.querySelector("#boton-pagar");

let carrito = [];

// Función para actualizar el carrito
function actualizarCarrito() {
  listaCarrito.innerHTML = "";
  totalCarrito.textContent = "$" + calcularTotal();

  carrito.forEach(function (item) {
    const li = document.createElement("li");
    li.textContent = item.nombre + " - $" + item.precio;
    listaCarrito.appendChild(li);
  });
}

// Función para calcular el total del carrito
function calcularTotal() {
  let total = 0;

  carrito.forEach(function (item) {
    total += item.precio;
  });

  return total.toFixed(2);
}

// Evento para agregar productos al carrito
botonAgregar.forEach(function (boton) {
  boton.addEventListener("click", function (evento) {
    const nombre = evento.target.getAttribute("data-nombre");
    const precio = parseFloat(evento.target.getAttribute("data-precio"));

    carrito.push({ nombre, precio });
    actualizarCarrito();
  });
});

// Evento para pagar
botonPagar.addEventListener("click", function () {
  const total = calcularTotal();

  if (total === "0.00") {
    alert("Tu carrito está vacío");
    return;
  }

  const mensaje = "Total: $" + total + "\n¿Deseas realizar el pago?";

  if (confirm(mensaje)) {
    carrito = [];
    actualizarCarrito();
    alert("¡Gracias por tu compra!");
  }
});

