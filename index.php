<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Somos una agencia dedicada al diseño de productos digitales únicos. Desarrollamos tu sitio web o la app que sueñas">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript,Web,Development,Desarrollo,Software,Digital">
  	<meta name="author" content="Agustin Ducca Pantaleon, Sebastian Carosella, Juan Genco">
	<title>Desarrollo web | Main Group</title>
	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="resources/MDL/material.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main-styles.css">
</head>
<body>
<main class="wrapper">
<section id="landing" class="content-section">
		<div class="demo-layout-transparent mdl-layout mdl-js-layout">
		  <header class="mdl-layout__header mdl-layout__header--transparent">
		    <div class="mdl-layout__header-row">
		      <!-- Title -->
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Logo -->
		      <img src="img/logo.png" alt="Main Group" class="img-responsive">
		    </div>
		  </header>

		  <div class="mdl-layout__drawer">
		    <span class="mdl-layout-title">Menú</span>
		    <nav class="mdl-navigation">
		      <a class="mdl-navigation__link" href="index.html">Home</a>
		      <a class="mdl-navigation__link" href="agencia.html">Agencia</a>
		      <a class="mdl-navigation__link" href="servicios.html">Servicios</a>
		      <a class="mdl-navigation__link" href="workmode.html">Work Mode</a>
		      <a class="mdl-navigation__link" href="">Contacto</a>
		    </nav>
		  </div>
		  <!-- Principal -->
		  	<div class="content-grid mdl-grid grid-landing-absolute">
					<h1 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-phone primary-title">Desarrollamos <br>experiencias</h1>
					<h5 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-phone secondary-title">Creamos productos digitales únicos</h5>
					<button id="accion-down-page" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent positioned-btn">CONÓCENOS
					</button>
		  	<!-- Vídeo principal -->	
		  	</div>
			<div class="homepage-hero-module">
			    <div class="video-container">
			        <div class="filter"></div>
			        <video autoplay loop class="fillWidth">
			        	<source src="media/main-landing-video.webM" type="video/webM">
			        	<source src="media/main-landing-video.ogv" type="video/ogv">
			            <source src="media/main-landing-video.mp4" type="video/mp4">
			        </video>
			        <div class="poster hidden">
			            <img src="PATH_TO_JPEG" alt="">
			        </div>
			    </div>
			</div>
</section>
<!-- Sección proyectos realizados -->
<section id="projects-preview" class="content-section">
	<h2 class="section-title">Materializamos ideas</h2>
	<h3 class="section-subtitle">Hacemos sueños realidad</h3>
	<div class="content-grid mdl-grid special-with-grid">
		<div id="project-1" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="img/pagina-01.png">
		</div>
			<div id="project-2" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="img/pagina-02.png">
		</div>
			<div id="project-3" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="img/pagina-03.png">	
		</div>
			<div id="project-4" class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="img/pagina-04.png">	
		</div>
</div>
	</div>
	<div>
		<button id="accion-seemore-project" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">VER MÁS
		</button>
	</div>
</section>
<!-- Posible sección con los logos de clientes de nuestro equipo -->
<section id="clients-brand" class="content-section">
	<h2 class="section-title">Ellos confiaron en nosotros</h2>
	<h3 class="section-subtitle">Nuestros clientes son parte de nuestro equipo</h3>
	<div class="content-grid mdl-grid">
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">
		</div>
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">
		</div>
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">
		</div>
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">
		</div>
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">			
		</div>
		<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--6-col-phone brand-content">
			<img class="brand-img" src="" alt="">	
		</div>
	</div>
</section>
</main>
<footer> 
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone footer-img-content">
    	<img class="footer-img" src="img/footer.png" alt="Desarrollo Web">
    	<img class="footer-logo" src="./img/logo.png" alt="MainGroup" id="logo-fixed"> 
    </div>
    <div class="social-row">
      <a href="https://www.facebook.com/maingroupES/" target="_blank"><p class="social-icon">F</p></a>
      <a href="https://www.instagram.com/maingroup_es/" target="_blank"><p class="social-icon">I</p></a>
      <a href="mailto:contacto@main-group.co" target="_blank"><p class="social-icon">E</p></a>
    </div>
</footer>
	<!-- Scripts -->
	<script src="resources/Jquery/jquery-3.3.1.min.js"></script>
	<script src="resources/MDL/material.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>