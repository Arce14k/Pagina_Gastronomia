<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Arce</title>
	<style type="text/css">
		body {
			background: linear-gradient(to right, #191970, #477979)#fff;
			width: 100%;
			font-size: 20px;
			font-family: cursive;
		}

.titulo {
			text-align: center; 
			font-size: 70px;
			color: #333333;
			margin-bottom: 40px; 
			font-family: 'Brush Script MT', cursive;
		}

		.navegacion {
			width: 100%;
			background: #808080;
			position: fixed; /* Hace que el menú se quede fijo */
			top: 0;
			left: 0;
			z-index: 1000; /* Asegura que el menú esté por encima de otros elementos */
			box-shadow: 0 4px 2px -2px gray; /* Sombra para el menú */
		}

		.navegacion ul {
			list-style: none;
		}

		.menu > li {
			position: relative;
			display: inline-block;
		}

		.menu > li > a {
			display: flex;
			align-items: center;
			padding-left: 25px;
			padding-right: 25px;
			padding-top: 15px;
			padding-bottom: 25px;
			color: whitesmoke;
			font-family: Brush Script Mt;
			font-size: 62.5px;
			text-decoration: none;
		}

		.menu li a:hover {
			color: firebrick;
			transition: all 1.5s;
		}

		  .Gastro {
font-size: 45px;
text-align: center;
        }

		.sub-menu {
			position: absolute;
			background: #333333;
			width: 180px;
			visibility: hidden;
			opacity: 0;
			transition: visibility 0s 2s, opacity 2s;
			z-index: 9999; /* sub-mebu por envim,a de slider*/
		}

		.sub-menu li a {
			display: block;
			padding: 15px;
			color: #fff;
			font-family: monospace;
			text-decoration: none;
		}

		.menu > li:hover .sub-menu {
			visibility: visible;
			opacity: 1;
			transition: opacity 0.5s ease;
		}

		.imagen {
			width: 40px;
			margin-left: 10px;
		}

		.body-content {
			margin-top: 150px; /* Espacio para que el contenido no quede debajo del menú fijo */
		}

		#siguiente-slider {
			position: relative;
			z-index: 1;
		}

	</style>
	<body>

	<h1 class="titulo">Innovación gastronomica.</h1>

	<nav class="navegacion">
       <ul class="menu">
			<li><a href="inicioproy3.php">Inicio 🏡<alt="Inicio"></a></li>
			
			<li><a href="#">Aprende mas 👇<alt="Aprende_mas"></a>
			    <ul class="sub-menu">
			    	<li><a href="producto2proyecto3.php?categoria=Innovación_en_la_cocina">Innovación en la cocina  <alt="Innovación_en_la_cocina"></a></li>
			    	
			    </ul>
			</li>
			<li><a href="FormularioContactos.php">Contactanos 📞 <alt="Contactanos"></a></li>
			<li><a href="producto1proyecto3.php">Que es?🤷‍ <alt="Que_es?"></a></li>
			<li><a href="nosotros.php">Nosotros 🤝<alt="Nosotros"></a></li>
		</ul>
	</nav>

<h1 class="Gastro">Gastronomía</h1>

<br>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->


	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/acsino.jpg" alt="acsino" title="acsino" id="wows0_0"/></li>
		<li><img src="data0/images/ducki.jpg" alt="ducki" title="ducki" id="wows0_1"/></li>
		<li><img src="data0/images/fachero.jpg" alt="fachero" title="fachero" id="wows0_2"/></li>
		<li><img src="data0/images/fish.jpg" alt="fish" title="fish" id="wows0_3"/></li>
		<li><img src="data0/images/hediondo.jpg" alt="hediondo" title="hediondo" id="wows0_4"/></li>
		<li><img src="data0/images/ladona.jpg" alt="ladona" title="ladona" id="wows0_5"/></li>
		<li><img src="data0/images/pablo.jpg" alt="pablo" title="pablo" id="wows0_6"/></li>
		<li><img src="data0/images/pajaro.jpg" alt="pajaro" title="pajaro" id="wows0_7"/></li>
		<li><img src="data0/images/panto.jpg" alt="panto" title="panto" id="wows0_8"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/petulll.jpg" alt="css slider" title="petulll" id="wows0_9"/></a></li>
		<li><img src="data0/images/vochito.jpg" alt="vochito" title="vochito" id="wows0_10"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="acsino"><span><img src="data0/tooltips/acsino.jpg" alt="acsino"/>1</span></a>
		<a href="#" title="ducki"><span><img src="data0/tooltips/ducki.jpg" alt="ducki"/>2</span></a>
		<a href="#" title="fachero"><span><img src="data0/tooltips/fachero.jpg" alt="fachero"/>3</span></a>
		<a href="#" title="fish"><span><img src="data0/tooltips/fish.jpg" alt="fish"/>4</span></a>
		<a href="#" title="hediondo"><span><img src="data0/tooltips/hediondo.jpg" alt="hediondo"/>5</span></a>
		<a href="#" title="ladona"><span><img src="data0/tooltips/ladona.jpg" alt="ladona"/>6</span></a>
		<a href="#" title="pablo"><span><img src="data0/tooltips/pablo.jpg" alt="pablo"/>7</span></a>
		<a href="#" title="pajaro"><span><img src="data0/tooltips/pajaro.jpg" alt="pajaro"/>8</span></a>
		<a href="#" title="panto"><span><img src="data0/tooltips/panto.jpg" alt="panto"/>9</span></a>
		<a href="#" title="petulll"><span><img src="data0/tooltips/petulll.jpg" alt="petulll"/>10</span></a>
		<a href="#" title="vochito"><span><img src="data0/tooltips/vochito.jpg" alt="vochito"/>11</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">wow slider</a> by WOWSlider.com v9.0</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section --><header>


/* https://www.cursosfemxa.es/blog/innovacion-cocina */



	</head>
	
</header>

</body>
</html>
