<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Catálogo de ropa</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<h1>Catálogo de ropa</h1>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Ropa para mujeres</a></li>
				<li><a href="#">Ropa para hombres</a></li>
				<li><a href="#">Carrito de compras</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="productos">
			<h2>Ropa para mujeres</h2>
			<div class="producto">
				<img src="https://via.placeholder.com/150x150" alt="Camisa para mujeres">
				<h3>Camisa para mujeres</h3>
				<p>$20.00</p>
				<button class="boton-agregar" data-nombre="Camisa para mujeres" data-precio="20.00">Agregar al carrito</button>
			</div>
			<div class="producto">
				<img src="https://via.placeholder.com/150x150" alt="Pantalones para mujeres">
				<h3>Pantalones para mujeres</h3>
				<p>$30.00</p>
				<button class="boton-agregar" data-nombre="Pantalones para mujeres" data-precio="30.00">Agregar al carrito</button>
			</div>
			<div class="producto">
				<img src="https://via.placeholder.com/150x150" alt="Vestido para mujeres">
				<h3>Vestido para mujeres</h3>
				<p>$40.00</p>
				<button class="boton-agregar" data-nombre="Vestido para mujeres" data-precio="40.00">Agregar al carrito</button>
			</div>
		</section>

		<aside id="carrito">
			<h2>Carrito de compras</h2>
			<ul></ul>
			<p>Total: <span id="total">$0.00</span></p>
			<button id="boton-pagar">Pagar</button>
		</aside>
	</main>

	<script src="script.js"></script>
</body>
</html>
