<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->

<!--INICIO del contenido principal-->

<div class="container">
	
 <link rel="stylesheet" href="estilos.css">
 
 <!-- Esto es lo que muestra el cuerpo de Trabajo -->
	<center>
	 <table border="0">
		<tr>
			<th><center><strong><br>
			<a href="solic.php" class="">Formulario Solicitudes</a></strong></center><br>
			</th>
		</tr>

<!-- hacer una consulta de Solicitud en el mismo sistema salida en HTML -->
<hr><td><center><strong>Buscar Solicitud:</strong><form method="POST" action="con_solic.php">
	 <input type="text" autocomplete="off" class="formulario__input" name="datoBuscar" required="" id="codigo1" placeholder="Cedula identidad  V-1234567" maxlength="12" />
	 
<!-- aqui estan los botones -->
	 <input class="boton_busc" type="reset" value="Limpiar" name="Limpiar"> <!-- Boton de Restablecer -->
	 <input class="boton_busc" type="submit" Value="Enviar" name="Enviar"/> <!-- Boton de enviar consulta -->
	 </form>
	 
</div>
	 
<!-- Historial de todas las solicitudes -->
		<tr>
			<th><center><strong><br>
			 <a href="histo_solic.php" class="">Historial de Solicitudes</a></strong></center><br>
		    </th>
		</tr>
<!-- Este enlace es para mostrar todos los registros en formato PDF -->
		<tr>
			<th><center><strong><br>
			 <a href="solic_pdf.php" class="">Tabla de Registro solicitudes PDF</a></strong></center><br>
			</th>
		</tr>		
<!-- Todas las solicitudes en formato PDF -->
		<tr>
			<th><center><strong><br>
			 <a href="solic_esp_pdf.php" class="">Todas las Solicitud PDF</a></strong></center><br>
	        </th>
		</tr>
<!-- Buscar solicitud en formato PDF individualmente por cédula de identidad -->
		<tr>
			<th><center><strong><br>
			 <a href="buscar_solic_pdf.php" class="">Buscar Solicitud individual PDF</a></strong></center><br>
			</th>
		</tr>
	 </td>
	 </strong>
	 </table>
	</center>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?> <!-- Para mostrar la parte inferior -->