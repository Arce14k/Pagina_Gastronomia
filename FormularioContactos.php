<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Contactos</title>
	<style type="text/css">
body{
	background: linear-gradient(to right, khaki,white,  #A3CDA2);
	text-align: center;
	font-size: 35px;
	font-family: sans-serif;
	
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


input[type="text"], 
		input[type="telefono"], 
		input[type="email"], 
		textarea {
			font-size: 16px;
			margin: 13px auto;
			padding: 10px;
			width: 300px;
			border: 10px solid #ccc;
			border-radius: 30px;
			background-color: darkgray;
}





textarea {
			height: 150px;

}
input[type="submit"] {
			font-size: 23px;
			padding: 20px 250px;
			margin-top: 30px;
			border: black;
			border-radius: 10px;
			background-color: #5a8dee;
			color: white;
			cursor: pointer;
			transition: background-color 0.3s;
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

	
<fieldset>
	<legend>Contáctanos</legend>
<form>

<label>Nombre</label><br>
<input type="text" name="txtnombre" placeholder="Nombre Completo">
<br><br>

<label>Correo Electronico</label><br><br>
<input type="email" name="txtcorreo"  placeholder="User1234@gmail.com"><br>

<label>Numero de telefono</label><br><br>
<input type="telefono" name="txttelefono"  placeholder="XXX-XXX-XX-XX" pattern="[0-9]{10}" maxlength="10"  inputmode="numeric" required><br>

<label>Mensaje</label><br>
<textarea name="txtmensaje" placeholder="Introduce comentario" required></textarea><br>

	
<input type="submit" value="Enviar">


	
</form>

</fieldset>

</body>
</html>