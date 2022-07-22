<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->

<!--INICIO del cont principal-->
<div class="container">
    <h1>Resultado Consulta Especifica de Solicitud:</h1><br><br>
	<center>
	<form>

		<?php 
			$conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión");
			$registros=mysqli_query($conexion,"select * from solic where ci='$_POST[datoBuscar]'")or die("Problemas en el select:".mysqli_error($conexion));
			if($reg=mysqli_fetch_array($registros))
			{
				echo "El ID: ".$reg['id']."<br>";
				echo "la Cédula de Identidad es: ".$reg['ci']."<br>";
				echo "Nombre del Solicitante: ".$reg['nombre_solic']."<br>";
				echo "Nombre del Equipo: ".$reg['nombre_equipo']."<br>";
				echo "Averia: ".$reg['averia']."<br>";
				echo "Encargado: ".$reg['cargo']."<br>";
				echo "Nombre del encargado: ".$reg['nombre_tec']."<br>";
				echo "Cédula de identidad del encargado: ".$reg['ci_tec']."<br>";
				echo "Código de solicitud: ".$reg['cod_solic']."<br>";
				echo "Fecha de Solicitud: ".$reg['fecha_solic']."<br>";
			}else{
				echo "No existe número de Cédula en la base de datos Solicitudes ";
			}
			mysqli_close($conexion);
		?>
	</center>
</div>
<!--FIN del cont principal-->
	</form><br><br><br>
 <center><a href="buscar_solic_tab.php" class="boton">Hacer otra busqueda</a>
 <a href="index.php" class="boton">Ir a Inicio</a></center>
</body>
</html>

<?php require_once "vistas/parte_inferior.php"?>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->