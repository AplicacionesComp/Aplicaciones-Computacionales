<?php
	if(isset($_POST['insertar'])){ /*Con isset se revisa si se le dio click al elemento llamado insertar el cual es el boton */
		/*Se imprimen los valores con la instruccion echo y se accede al valor con $_POST y el nombre del elemento*/
		echo "<br><h4>Datos registrados:</h4>";
        echo "<strong>Nombre</strong>: ". $_POST['nombre'];
        echo "<br>";
        echo "<strong>Email</strong>: ".$_POST['costo'];;
        echo "<br>";
		echo "<strong>Descripción</strong>: ". $_POST['descripcion'];
		
	}
?>
<!--Pagina HTML basica para mostrar los elementos y un boton que regresa al inicio -->
<!DOCTYPE html>
<html>
<head>
	<title>Registro exitoso</title>
</head>
<body>
	<center><a class="button" href="inicio.html" >
		<button class="volver" type="submit">Volver al inicio</button>
	</a></center>
</body>
</html>