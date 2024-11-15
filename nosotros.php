<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nosotros</title>
	<style type="text/css">
		body {
			background: darkgray; 
			font-family: "Palatino Linotype", serif; 
			font-size: 30px; 
			margin: 0; 
			padding: 20px;
		}
		.titulo {
			text-align: center; 
			font-size: 100px;
			color: #333333;
			margin-bottom: 40px; 
			font-family: 'Brush Script MT', cursive;
		}

		.texto{
			text-align: center;
			font-size: 50px;
			font-family: cursive;
		}
		.intro{
			text-align: center;
			font-size: 30px;
			font-family: monospace;
		}

		.contenido {
			background: #A3CDA2; 
			color: white; 
			padding: 30px; 
			border-radius: 10px; 
			max-width: 900px; 
			margin: auto; 
			box-shadow: 0 4px 10px rgba(0.5, 0.3, 0.3, 1); 
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
	</style>
</head>
<body>
<header>
<nav class="navegacion">
       <ul class="menu">
            <li><a href="inicioproy3.php">Inicio 🏡<alt="Inicio"></a></li>
            
            <li><a href="#">Aprende mas 👇<alt="Aprende_mas"></a>
                <ul class="sub-menu">
                    <li><a href="producto2proyecto3.php?categoria=Innovación_en_la_cocina">Innovación en la cocina  <img src="imagenes/imagen7.jpg" class="imagen" alt="Innovación_en_la_cocina"></a></li>
                    
                </ul>
            </li>
            <li><a href="FormularioContactos.php">Contactanos📞 <alt="Contactanos"></a></li>
            <li><a href="producto1proyecto3.php">Que es?🤷‍ <alt="Que_es?"></a></li>
            <li><a href="nosotros.php">Nosotros 🤝<alt="Nosotros"></a></li>
        </ul>
    </nav>


<h1 class="titulo">Vision de esta empresa</h1>
<div class="contenido">
	<h1 class="texto">Eficiencia y simplicidad.</h1>
	
<h1 class="intro">Nos enfocamos en destilar nuestros procesos y soluciones a su esencia más pura, eliminando cualquier elemento superfluo. Creemos que la simplicidad en el diseño y la ejecución no solo hace que nuestras soluciones sean más fáciles de usar y entender, sino que también facilita la optimización y mejora continua.</h1>
	
</div>

</body>
</html>
