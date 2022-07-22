<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->

<!--INICIO del contenido principal-->
<div class="container">
    <h1>Historial de solicitudes</h1>
    </tr>
	
		<hr><center><form method="POST" action="con_solic.php">
	 <p>Buscar Registro</p>
	 <input type="text" name="datoBuscar" required="" id = "codigo1" placeholder="Cedula identidad V-1.234.567" maxlength="12">
	 <!-- maxlength="12" indica que tendra maximo 12 caracteres de ingreso -->
	
	 <!-- aqui estan los botones -->
	 <input class="boton_busc" type="reset" value="Limpiar" name="Limpiar"> <!-- Boton de Restablecer -->
	 <input class="boton_busc" type="submit" Value="Enviar" name="Enviar"/> <!-- Boton de enviar consulta -->
	 </form>
	 </td>
	</table></center>
	<br><br>
	
    <?php
	$conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión :(");
		$registros=mysqli_query($conexion,"select * from solic") or die 
				("Problemas en el select:".mysqli_error($conexion));

				echo "<table border='1'>
				<tr>
					<td><b>CI del solicitante</b></td>
					<td><b>Nombre Solicitante</b></td>
					<td><b>Nombre del Equipo</b></td>
					<td><b>Serial del Equipo</b></td>
					<td><b>Averia</b></td>
					<td><b>Encargado</b></td>
					<td><b>Nombre del encargado</b></td>
					<td><b>CI del encargado</b></td>	
					<td><b>Código de solicitud</b></td>
					<td><b>Fecha de Solicitud</b></td>
					<td colspan ='3'><center><b>Opciones</b></center></td>	
					
				</tr>";

				while ($reg=mysqli_fetch_array($registros))
				{
					echo "<tr><td>".$reg['ci']."</td>";
					echo "<td>".$reg['nombre_solic']."</td>";
					echo "<td>".$reg['nombre_equipo']."</td>";
					echo "<td>".$reg['serial_equipo']."</td>";
					echo "<td>".$reg['averia']."</td>";
					echo "<td>".$reg['cargo']."</td>";
					echo "<td>".$reg['nombre_tec']."</td>";
					echo "<td>".$reg['ci_tec']."</td>";
					echo "<td>".$reg['cod_solic']."</td>";
					echo "<td>".$reg['fecha_solic']."</td>";
					
					/* ///////////////////////////////////////
					// Aqui se agregan los botones para que hagan las tareas de 
					// modificar Solicitud, eliminar Solicitud
					//////////////////////////////////////////
					*/
					/*Botón para PDF*/
					/*///////////////////////////////////////
					echo "<td>
							<form method='post' action='solic_pdf.php'>
							<input type='hidden' value='$reg[ci]' name='PDFgenerar'/>
							<input type='submit' value='PDF'/>
							</form>
						 </td>";
					////////////////////////////////////////////
					*/
				
					echo "<th>
							<input type='submit' value='✏Editar'/>
						 </th>";
						  
					/* Botón para eliminar */
					echo "<td>
							<form method='post' action='elim_solic.php'>
							<input type='hidden' value='$reg[ci]' name='codEliminar'/>
							<input type='submit' value='🗑️Eliminar'/>
							</form>
						 </td>";
						/*CHEckBox caja de verificacion*/
						echo "<td>
							<span class='codigo'> <input type='checkbox' name='checkbox\[\]'>
							</span> 
						 </td>";

				}
		echo "</table>";
	mysqli_close($conexion);
?>
    

<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>