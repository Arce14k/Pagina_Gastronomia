<?php
// Definir la sección activa. Si no hay parámetro, la sección por defecto será 'molecular'.
$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'molecular';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovación Tecnológica en la Gastronomía</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .titulo {
            text-align: center;
            font-size: 70px;
            color: #333333;
            margin-top: 120px; /* Espacio para el menú fijo */
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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .menu > li {
            position: relative;
            display: inline-block;
        }

        .menu > li > a {
            display: flex;
            align-items: center;
            padding: 35px 45px;
            color: whitesmoke;
            font-family: Brush Script Mt;
            font-size: 32px;
            text-decoration: none;
        }

        .menu li a:hover {
            color: firebrick;
            transition: all 0.5s;
        }

        .sub-menu {
            position: absolute;
            background: #333333;
            width: 180px;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s 2s, opacity 2s;
            z-index: 9999; /* sub-mebu por envim,a de slider */
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

        .seccion {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }

        .seccion img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0.5, 0.3, 0.3, 0.5);
        }

        .seccion .texto {
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1 class="titulo">Innovación gastronómica</h1>

    <nav class="navegacion">
       <ul class="menu">
            <li><a href="inicioproy3.php">Inicio 🏡</a></li>
            <li><a href="#">Aprende más 👇</a>
                <ul class="sub-menu">
                    <li><a href="producto2proyecto3.php?categoria=Innovación_en_la_cocina">Innovación en la cocina <class="imagen" alt="Innovación_en_la_cocina"></a></li>
                </ul>
            </li>
            <li><a href="FormularioContactos.php">Contáctanos 📞</a></li>
            <li><a href="producto1proyecto3.php">¿Qué es? 🤷‍</a></li>
            <li><a href="nosotros.php">Nosotros 🤝</a></li>
        </ul>
    </nav>
</header>

<!-- Contenedor de secciones -->
<div class="seccion">
    <img src="imagenes/imagengastr1.jpg" alt="Cocina Molecular">
    <div class="texto">
        <h2>Cocina Molecular</h2>
        <p>La cocina molecular combina la ciencia y la gastronomía para crear nuevas experiencias culinarias utilizando técnicas y herramientas innovadoras.</p>
    </div>
</div>

<div class="seccion">
    <img src="imagenes/vacio.jpg" alt="Cocina al Vacío">
    <div class="texto">
        <h2>Cocina al Vacío</h2>
        <p>La cocina al vacío involucra cocinar alimentos sellados en bolsas herméticas a bajas temperaturas durante períodos prolongados para lograr texturas y sabores únicos.</p>
    </div>
</div>

<div class="seccion">
    <img src="imagenes/nitrogeno.jpg" alt="Cocina con Nitrógeno Líquido">
    <div class="texto">
        <h2>Cocina con Nitrógeno Líquido</h2>
        <p>El nitrógeno líquido se utiliza para crear efectos visuales sorprendentes y texturas únicas, congelando ingredientes al instante.</p>
    </div>
</div>

<div class="seccion">
    <img src="imagenes/espumas.jpg" alt="Las Espumas">
    <div class="texto">
        <h2>Las Espumas</h2>
        <p>Las espumas son ligeras y aireadas, y se crean utilizando sifones y otros equipos para incorporar aire en los ingredientes líquidos.</p>
    </div>
</div>

<div class="seccion">
    <img src="imagenes/reposteria.jpg" alt="Repostería Actual">
    <div class="texto">
        <h2>Repostería Actual</h2>
        <p>La repostería actual incorpora nuevas técnicas y estilos para crear postres innovadores y visualmente impresionantes.</p>
    </div>
</div>

</body>
</html>
