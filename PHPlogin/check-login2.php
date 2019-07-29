<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="icon/css/fontello.css">
		<link rel="stylesheet" href="css/Estilo.css">
		<title>Usuario | CLÍNICA TÚ MEJOR SONRISA </title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>

	<body>
		<main>

			<div class="content-all">

<header></header>
<input type="checkbox" id="check">
<label for="check" class="icon-menu">

MENÚ</label>
<img  class="dimension "src="images/menu3.png"><br>
<h2>CTMS</h2>

<nav class="menu">
	<ul>
		<br><br>
		<h4 class="COLOR">TABLERO DE MOVIMIENTOS</h4>

<li>INICIO</li>
<a href="http://localhost/nuevo/PHPlogin/clientes/index0.php"><li>HISTORIAL CITAS</li></a>
<a href="http://localhost/nuevo/index6.php"><li>PACIENTE</li></a>
<a href=""><li>TRATAMIENTOS</li></a>
<a href=""><li>MIS DATOS </li></a>
<a href="LoginDoctor.html"><li>CERRAR SESIÓN </li></a>
	</ul>
</nav>
<article>
	<br>

	<h1 class="POS">OFRECEMOS LOS MEJORES SERVICOS PARA QUE PUEDAS DISFRUTAR DE UNA SALUD ORAL</h1>
	<img src="images/Sonrisa1.jpg">

	<h1>CLÍNICA TÚ MEJOR SONRISA</h1>
	<p class="parrafo1">
		<br><br>
		!Siente la Libertad de Sonreír!
		Somos una clínica dental, especialista en tratamientos dentales,
		 hacemos lo imposible posible,
			para poder darte un trabajo de calidad y satisfacción con respecto a tu sonrisa.
				</p>
</article>
</div>
		</main>

		<div class="container">

			<?php
			// Connection info. file
			include 'conn.php';


			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// data sent from form login.html
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Query sent to database
			$result = mysqli_query($conn, "SELECT Password,Email,Name,Lastname,Document,Genero,Telefono FROM users WHERE Email = '$email' ") ;


			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);

			// Variable $hash hold the password hash on database
			$hash = $row['Password'];

			/*
			password_Verify() function verify if the password entered by the user
			match the password hash on the database. If everything is OK the session
			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
			*/
			if (password_verify($_POST['password'], $hash)) {

				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;

			//	echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido!</strong> $row[Name]
				//<p><a href='edit-profile.php'>Edit Profile</a></p>
				///<p><a href='logout.php'>Logout</a></p></div>";



			} else {
				//echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				//<p><a href='LoginDoctor.html'><strong>Por favor intenta de nuevo!</strong></a></p></div>";
			}
			?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



	</body>

</html>
