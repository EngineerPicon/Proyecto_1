<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->

	
	<big><strong>Resultado de operación:</strong></big><br />
	<form>
		<?php 
			$conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión");
			$registros=mysqli_query($conexion,"select * from solic where ci='$_POST[codEliminar]'")
			or die("Problemas en el select:".mysqli_error($conexion));

			if($reg=mysqli_fetch_array($registros))
			{
				mysqli_query($conexion, "delete from solic where ci='$_POST[codEliminar]'") or die("Problemas en el select:".mysqli_error($conexion));
				echo "<b>Se efectuó el borrado de la solicitud.</b><br><br>";
			}
			mysqli_close($conexion);
		?>
	</form> 
<br><br><br>
 <a href="histo_solic.php" class="boton">Volver a Registros</a>
 <a href="index.php" class="boton">Ir a Inicio</a>
</body>
</html>

<?php require_once "vistas/parte_inferior.php"?>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->
