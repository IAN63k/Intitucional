<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso</title>
	<link rel="stylesheet" href="./style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<?php

	include_once("process.php");
	session_start();
	if (isset($_SESSION['rol'])) {
		switch ($_SESSION['rol']) {
			case 1:
				header('location: ./admin/adminSession.php');
				break;
			case 2:
				header('location: ./teacher/teacherSession.php');
				break;
			case 3:
				header('location: ./student/studentSession.php');
				break;
			default:
		}
	}


	#SI INTENTA INGRESAR 
	if (isset($_POST["singUp-btn"])) {
		# Cuando se acciona el boton de ingresar

		if ((empty($_POST['sing-email'])) && (empty($_POST['singup-pass']))) {

			# Silos campos requeridos para el inicio de sesion se encuentran vacios
			mensjCamps(); // Muestra mensaje error
		} else {
			#En caso contrario almacena los datos>
			$email = $_POST['singup-email'];
			$password = $_POST['singup-pass'];

			$sql = mysqli_query($mysqli, "SELECT * from admin WHERE email= '$email' AND contraseña='$password' ");
			$querryDocente = mysqli_query($mysqli, "SELECT * from docentes WHERE email= '$email' AND contraseña='$password' ");
			$querryEstudiante = mysqli_query($mysqli, "SELECT * from estudiantes WHERE email= '$email' AND contraseña='$password' ");

			if ($user = mysqli_fetch_assoc($sql)) {
				//Verifica el inicio de session para el admin

				mensjSuccesful(); //Muestra mensaje de confirmacion

				$_SESSION['rol'] = $user['id_rol']; //Pasa el rol id del admin para mantener la sesion iniciada.
				//Almacena el nombre y el id del usuario para tenerlos presentes.
				$_SESSION['nombre'] = $user['nombre'];
				$_SESSION['id'] = $user['id'];

				switch ($_SESSION['rol']) {
					case 1:
						header('location: ./admin/adminSession.php');
						#Redirecciona a la pagina inicial del admin.
						break;
					default:
				}
			} else if ($user = mysqli_fetch_assoc($querryDocente)) {
				//Verifica el inicio de session para el docente.

				mensjSuccesful(); //Muestra mensaje de confirmacion

				$_SESSION['rol'] = $user['id_rol']; //Pasa el rol id del docente para mantener la sesion iniciada.
				//Almacena el nombre y el id del usuario para tenerlos presentes.
				$_SESSION['nombre'] = $user['nombre'];
				$_SESSION['id'] = $user['id'];

				switch ($_SESSION['rol']) {
					case 2:
						header('location: ./teacher/teacherSession.php');
						#Redirecciona a la pagina inicial del docente.
						break;
					default:
				}
			} else if ($user = mysqli_fetch_assoc($querryEstudiante)) {
				//Verifica el inicio de session para el estudiante.
				mensjSuccesful();
				$_SESSION['rol'] = $user['id_rol']; //Pasa el rol id del estudiante para mantener la sesion iniciada.
				//Almacena el nombre y el id del usuario para tenerlos presentes.
				$_SESSION['nombre'] = $user['nombre'];
				$_SESSION['id'] = $user['id'];

				switch ($_SESSION['rol']) {
					case 3:
						header('location: ./student/studentSession.php');
						#Redirecciona a la pagina inicial del estudiante.
						break;
					default:
				}
			} else {
				//Encaso de que el usuario no se encuentre en la base de datos.
				mensjErrorSingup(); //Muestra mensaje error.
			}
		}
	}

	?>
</head>

<body>
	<main>
		<div class="dark-light">
			<figure>
				<svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
				</svg>
			</figure>
		</div>
		<div class="mesage">
		</div>
		<div class="section">
			<form action="#" method="POST">
				<div class="container">
					<div class="row full-height justify-content-center">
						<div class="col-12 text-center align-self-center py-5">
							<div class="section pb-5 pt-5 pt-sm-2 text-center">
								<h6 class="mb-0 pb-3"><span>Iniciar seccion </span><span>Registrarse</span></h6>
								<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
								<label for="reg-log"></label>
								<div class="card-3d-wrap mx-auto">
									<div class="card-3d-wrapper">
										<div class="card-front">
											<div class="center-wrap">
												<div class="section text-center">
													<h4 class="mb-4 pb-3">Iniciar Seccion</h4>
													<div class="form-group">
														<input type="email" name="singup-email" class="form-style" placeholder="Tu Email" id="logemail" autocomplete="on">
														<i class="input-icon uil uil-at"></i>
													</div>
													<div class="form-group mt-2">
														<input type="password" name="singup-pass" class="form-style" placeholder="Tu contraseña" id="logpass" autocomplete="off">
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<button type="submit" name="singUp-btn" class="btn mt-4">Ingresar</button>
													<p class="mb-0 mt-4 text-center"><a href="#0" class="link">¿Olvido la contraseña?</a></p>
												</div>
											</div>
										</div>
										<div class="card-back">
											<div class="center-wrap">
												<div class="section text-center">
													<h4 class="mb-4 pb-2">Registrarse</h4>
													<div class="form-group">
														<input type="text" name="logname" class="form-style" placeholder="Tu nombre completo" id="logname" autocomplete="off">
														<i class="input-icon uil uil-user"></i>
													</div>
													<div class="form-group mt-2">
														<input type="text" name="logid" class="form-style" placeholder="Tu ID" id="logid" autocomplete="off">
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<div class="form-group mt-2">
														<input type="email" name="logemail" class="form-style" placeholder="Tu Email" id="logemail" autocomplete="on">
														<i class="input-icon uil uil-at"></i>
													</div>
													<div class="form-group mt-2">
														<input type="password" name="logpass" class="form-style" placeholder="Tu contraseña" id="logpass" autocomplete="off">
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<div class="form-group mt-2">
														<select name="rol" class="form-style" id="logrol" name="rol">
															<option value="0" disabled>ROL</option>
															<option value="3">Estudiante</option>
															<option value="2">Docente</option>
															</optgroup>
														</select>
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<button type="submit" name="logbtn" class="btn mt-1">Ingresar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- partial -->
		<script src="./script.js"></script>
	</main>
</body>



</html>


<?php

#Si preciona registrar
if (isset($_POST["logbtn"])) {

	if (is_numeric($_POST["logid"]) && (!empty($_POST['logname'])) && (!empty($_POST['logemail'])) && (!empty($_POST['logpass'])) &&  (!empty($_POST["rol"]))) {

		$name = $_POST["logname"];
		$id = $_POST["logid"];
		$email = $_POST["logemail"];
		$password = $_POST["logpass"];
		$rol = $_POST["rol"];

		if ($rol == 2) { //Si el rol es docente

			$qidr = mysqli_query($mysqli, "SELECT * FROM docentes WHERE id = '" . $id . "' ");
			$qemail = mysqli_query($mysqli, "SELECT * FROM docentes WHERE email = '" . $email . "' ");

			if (mysqli_num_rows($qidr) == 0) {

				# verifica si la cedula no esta repetida...
				if (mysqli_num_rows($qemail) == 0) {

					# verifica si el email no esta repetido...
					mysqli_query($mysqli, "INSERT INTO docentes (nombre, id, email, contraseña, profile, id_rol ) VALUES ('".$name."', '".$id."','".$email."' ,'".$password."', '../img/perfil/2.jpg', '".$rol."');");


					mensj();
				} else {
					mensjErrorEmail();
				}
			} else {
				mensjErrorID();
			}
		}

		if ($rol == 3) { // Si el rol es estudiante

			$qidr = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE id = '" . $id . "'");
			$qemail = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE email = '" . $email . "'");

			if (mysqli_num_rows($qidr) == 0) {

				# verifica si la cedula no esta repetida...
				if (mysqli_num_rows($qemail) == 0) {

					# verifica si el email no esta repetido...
					mysqli_query($mysqli, "INSERT INTO estudiantes (nombre, id, email, contraseña, profile, id_rol) VALUES ('".$name."', '".$id."','".$email."' ,'".$password."', '../img/perfil/2.jpg', '".$rol."');");

					mensj();
				} else {
					mensjErrorEmail();
				}
			} else {
				mensjErrorID();
			}
		}
	} else {
		mensjCamps();
	}
}




?>