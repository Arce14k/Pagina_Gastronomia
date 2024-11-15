
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovación Tecnológica en la Gastronomía</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; color: #333; }
        h1, h2, h3 { color: #00796b; }
        h1 { font-size: 2em; }
        h2 { font-size: 1.5em; }
        p { margin: 0 0 1em; }
        ul { list-style-type: disc; margin-left: 20px; 
padding: 10px;
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

        .Gastro {
font-size: 45px;
text-align: center;
        }

        .Ques {
font-size: 30px;
font-family: monospace;

        }
        .contenido {
            background: #A3CDA2; 
            color: white; 
            padding: 50px; 
            border-radius: 10px; 
            max-width: 900px; 
            margin: auto; 
            box-shadow: 0 4px 10px rgba(0.5, 0.3, 0.3, 1); 
        }

.imagen-bajo-texto {
            width: 100%; /* Ajusta el tamaño de la imagen al 100% del contenedor */
            display: block;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0.5, 0.3, 0.3, 0.5);
        }

    </style>
</head>
<body>
<header>
    <h1 class="titulo">Innovación gastronomica.</h1>

    <nav class="navegacion">
       <ul class="menu">
            <li><a href="inicioproy3.php">Inicio 🏡<alt="Inicio"></a></li>
            
            <li><a href="#">Aprende mas 👇<alt="Aprende_mas"></a>
                <ul class="sub-menu">
                    <li><a href="producto2proyecto3.php?categoria=Innovación_en_la_cocina">Innovación en la cocina  <alt="Innovación_en_la_cocina"></a></li>
                    
                </ul>
            </li>
            <li><a href="FormularioContactos.php">Contactanos📞 <alt="Contactanos"></a></li>
            <li><a href="producto1proyecto3.php">Que es?🤷‍ <alt="Que_es?"></a></li>
            <li><a href="nosotros.php">Nosotros 🤝<alt="Nosotros"></a></li>
        </ul>
    </nav>


    <h1 class="Gastro">Gastronomía</h1>
    <div class="contenido">

    <p class="Ques">La gastronomía, o “el arte de comer bien”, no es solo una dieta, sino una combinación de ingredientes y sabores que despiertan los sentidos. Los chefs crean experiencias sensoriales, siguiendo reglas y técnicas complejas que requieren conocimiento y práctica. La gastronomía está sujeta a modas y tendencias. Desde el Renacimiento, la cocina se ha vuelto más creativa, incorporando nuevos productos del Nuevo Mundo, como el chocolate, frijoles, pimientos, tomates, maíz y papas. Además, la ciencia y tecnología han modernizado la cocina, con inventos como la esterilización de alimentos (1795) y el refrigerador, que permitieron una mejor conservación de los alimentos.</p>
    
    <img src="imagenes/imagen_gastronomia.jpg" alt="Imagen de Gastronomía" class="imagen-bajo-texto">

</body>
</html>
