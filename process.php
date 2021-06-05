<?php

$mysqli = mysqli_connect("localhost", "root", "", "institution");
if (mysqli_connect_errno($mysqli)) {
	echo "<script>alert('Fallo al conectar a MySQL: ')</script>" . mysqli_connect_error();
	exit;
}



function mensjCamps()
{
	echo " 
				<div class='alert'> 
					<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
					<strong>!Campos vacios!</strong>
				</div>";
}
function mensj()
{
	echo " 
			<div class='alert-nice'> 
           			<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
           			<strong>!Registrado!</strong>
            </div>";
}
function mensjSuccesful()
{
	echo " 
			<div class='alert-nice'> 
           			<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
           			<strong>!Bienvenido!</strong>
            </div>";
}
function mensjErrorID()
{
	echo " 
			<div class='alert'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Cedula invalidad, ya se encuentra registrada!, intente nuevamente</strong>
            </div>";
}
function mensjErrorEmail()
{
	echo " 
			<div class='alert'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Email invalido, ya se encuentra registrado!, intente nuevamente</strong>
            </div>";
}
function mensjErrorSingup()
{
	echo " 
			<div class='alert'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Usuario o contraseña erronea, intente nuevamente!</strong>
            </div>";
}

