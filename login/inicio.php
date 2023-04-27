<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="form">
		<h2>Iniciar sesión</h2>
		<form action="ejercicio1.php" method="post">
			<label for="username">Nombre de usuario:</label>
			<input type="text" id="username" name="username" required pattern="^[a-zA-Z]+$"><br><br>
			<label for="password">Contraseña:</label>
			<input type="password" id="password" name="password" required pattern="^[a-zA-Z0-9]+$"><br><br>
			<input type="submit" value="Iniciar sesión">
		</form>
	</div>
</body>
</html>

<?php
    $valid_username = "Marialejandra";
    $valid_password = "Marialejandra060804";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
	    header("Location: ejercicio1.php");
	    exit();
    } else {
	echo "Nombre de usuario o contraseña incorrectos.";
}
?>