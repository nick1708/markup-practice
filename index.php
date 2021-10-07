<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./index.css" />
		<link rel="stylesheet" media="(max-width: 415px)" href="mobile.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<!-- la etiqueta link se usa para importar archivos -->
	</head>
	<body>
		<header class="Header">
			<!-- Aqui va la seccion del menu -->
			<div class="Header-container">
				<a class="Header-logo" href="#">Taylor Swift</a>
				<button class="Header-button">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</header>
		<section class="Hero">
			<!-- Aqui va la seccion del banner -->
			<div class="Hero-container">
				<h1 class="Hero-title">Evermore</h1>
			</div>
		</section>
		<section class="Mosaic">
			<!-- Aqui va la seccion del mosaico -->
			<div class="Mosaic-container">
				<div class="Mosaic-item">
					<img
						class="Mosaic-image"
						src="./images/mosaic/Taylor-Swift-1989.jpg"
						alt="1989"
					/>
					<div class="Mosaic-content">
						<p class="Mosaic-date">27 de octubre de 2014</p>
						<h3 class="Mosaic-name">1989</h3>
						<p class="Mosaic-text">
							Phasellus scelerisque arcu vestibulum tempor tempor.
							Donec vulputate leo et metus hendrerit bibendum.
							Interdum et malesuada fames ac ante ipsum primis in
							faucibus. In scelerisque nisl nec ornare euismod.
						</p>
						<a class="Mosaic-link" href="#">View More</a>
					</div>
				</div>
				<div class="Mosaic-item reverse">
					<img
						class="Mosaic-image"
						src="./images/mosaic/AAAABQmmo3cRDyv35mvo-Oy12ON2V5WQBarq9ttqx9tj3TvczmQjPull3YyWOOvRhZHmYuvho9e3dErkS4aoEfga3A5tHCwj.jpg"
						alt="1989"
					/>
					<div class="Mosaic-content">
						<p class="Mosaic-date rep">10 de noviembre de 2017</p>
						<h3 class="Mosaic-name">Reputation</h3>
						<p class="Mosaic-text">
							Phasellus scelerisque arcu vestibulum tempor tempor.
							Donec vulputate leo et metus hendrerit bibendum.
							Interdum et malesuada fames ac ante ipsum primis in
							faucibus. In scelerisque nisl nec ornare euismod.
						</p>
						<a class="Mosaic-link rep" href="#">View More</a>
					</div>
				</div>
				<div class="Mosaic-item">
					<img
						class="Mosaic-image"
						src="./images/mosaic/1624044327_788968_1624044538_noticia_normal.jpg"
						alt="1989"
					/>
					<div class="Mosaic-content">
						<p class="Mosaic-date red">22 de octubre de 2012</p>
						<h3 class="Mosaic-name">Red</h3>
						<p class="Mosaic-text">
							Phasellus scelerisque arcu vestibulum tempor tempor.
							Donec vulputate leo et metus hendrerit bibendum.
							Interdum et malesuada fames ac ante ipsum primis in
							faucibus. In scelerisque nisl nec ornare euismod.
						</p>
						<a class="Mosaic-link red" href="#">View More</a>
					</div>
				</div>
			</div>
		</section>
		<section class="Gallery">
			<div class="Gallery-container">
				<img
					class="Gallery-image"
					src="./images/gallery/gallery1.jpg"
					alt="Taylor-Swift"
				/>
				<img
					class="Gallery-image"
					src="./images/gallery/gallery2.jpg"
					alt="Taylor-Swift"
				/>
				<img
					class="Gallery-image"
					src="./images/gallery/gallery3.jpg"
					alt="Taylor-Swift"
				/>
				<img
					class="Gallery-image"
					src="./images/gallery/gallery5.jpg"
					alt="Taylor-Swift"
				/>
			</div>
		</section>
		<section class="Portfolio">
			<!-- Aqui va la seccion de portafolio -->
			<div class="Portfolio-container">
				<h2 class="Portfolio-title">Taylor Swift</h2>
				<h3 class="Portfolio-subtitle">
					We are nominated to Album of Year
				</h3>
				<div class="Portfolio-albums">
					<img
						class="Portfolio-image"
						src="./images/Album/Album1.jpg"
						alt="Red"
					/>
					<img
						class="Portfolio-image"
						src="./images/Album/Album2.jpg"
						alt="1989"
					/>
					<img
						class="Portfolio-image"
						src="./images/Album/Album3.jpg"
						alt="Reputation"
					/>
					<img
						class="Portfolio-image"
						src="./images/Album/Album4.jpg"
						alt="Lover"
					/>
					<img
						class="Portfolio-image"
						src="./images/Album/Album5.jpg"
						alt="Folklore"
					/>
					<img
						class="Portfolio-image"
						src="./images/Album/Album6.jpg"
						alt="Evermore"
					/>
				</div>
			</div>
		</section>
		<section class="Services">
			<div class="Services-container">
				<div class="Services-image olivia">
					<p class="Services-name">Olivia</p>
				</div>
				<div class="Services-image meredith">
					<p class="Services-name">Meredith</p>
				</div>
				<div class="Services-image benjamin">
					<p class="Services-name">Benjamin</p>
				</div>
				<div class="Services-image joe">
					<p class="Services-name">Joe Alwyn</p>
				</div>
			</div>
		</section>
		<section class="Contact">
			<!-- Aqui va la seccion de formulario de contacto -->
			<div class="Contact-container">
				<h2 class="Contact-title">Contact Us</h2>
				<form>
					<input
						class="Contact-input"
						type="text"
						placeholder="Name"
					/>
					<input
						class="Contact-input"
						type="email"
						placeholder="Email"
					/>
					<textarea
						class="Contact-textarea"
						placeholder="Message"
					></textarea>
					<button class="Contact-button">Submit</button>
				</form>
			</div>
		</section>
		<footer class="Footer">
			<p class="Footer-text">Sample footer text</p>
			<p class="Footer-text">
				<a class="Footer-link" href="#">Template</a>
				created with
				<a class="Footer-link" href="#">Nicepage.</a>
			</p>
		</footer>
		<script
			src="https://kit.fontawesome.com/87131fda1b.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
