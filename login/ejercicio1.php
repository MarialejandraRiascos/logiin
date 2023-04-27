<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MENÚ</title>
</head>
<body>
	<div>
		<h1> MENÚ DE OPCIONES EN PHP</h1>
		<u1>
			<li>1. Datos de usuario </li>
			<li>2. Suma  </li>
			<li>3. Resta  </li>
			<li>4. Multiplicación  </li>
			<li>5. División  </li>
		</u1>
		<form action="" method="Post">
			<p> Ingrese la opción a procesar </p>
	    <input type="number" name="opt" id="opt">
	    <button type="submit">Ingresar</button>
	</div>
</body>
</html>

<?php
$opt=$_POST['opt'];

switch($opt)
{
	case '1':
		header( 'Location: formulario.php');
	break;

	case '2':
		header( 'Location: suma.php');
	break;

	case '3':
		header( 'Location: resta.php');
	break;

	case '4':
		header( 'Location: multiplicacion.php');
    break;
	case '5':
		header( 'Location: division.php');
	break;
}

echo "<h1>".$opt."</h1>";