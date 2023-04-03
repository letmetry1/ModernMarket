<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tienda E-commerce</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header>
    <h1>Tienda E-commerce</h1>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Carrito</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section>
      <h2>Productos</h2>
      <ul>
        <li>
          <h3>Producto 1</h3>
          <p>Descripción del producto 1.</p>
          <p>Precio: $10.00</p>
          <button class="boton-agregar" data-nombre="Producto 1" data-precio="10.00">Agregar al carrito</button>
        </li>
        <li>
          <h3>Producto 2</h3>
          <p>Descripción del producto 2.</p>
          <p>Precio: $20.00</p>
          <button class="boton-agregar" data-nombre="Producto 2" data-precio="20.00">Agregar al carrito</button>
        </li>
        <li>
          <h3>Producto 3</h3>
          <p>Descripción del producto 3.</p>
          <p>Precio: $30.00</p>
          <button class="boton-agregar" data-nombre="Producto 3" data-precio="30.00">Agregar al carrito</button>
        </li>
      </ul>
    </section>
    
    <section>
      <h2>Carrito</h2>
      <ul id="carrito">
      </ul>
      <p>Total: <span id="total"></span></p>
      <button id="boton-pagar">Pagar</button>
    </section>
  </main>
  
  <script src="app.js"></script>
</body>
</html>
