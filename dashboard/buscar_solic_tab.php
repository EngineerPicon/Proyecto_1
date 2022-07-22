<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->

<!--INICIO del cont principal-->
<div class="container">
    <h1>Buscar Solicitud en el sistema</h1>
<!-- Inicio Código de menu lateral -->

		</tr>
		<hr><center><form method="POST" action="con_solic.php">
	 <input type="text" name="datoBuscar" required="" id = "codigo1" placeholder="Cédula identidad V-1234567" maxlength="12">
	 <!-- maxlength="12" indica que tendra maximo 12 caracteres de ingreso -->
	
	 <!-- aqui estan los botones -->
	 <input class="boton_busc" type="reset" value="Limpiar" name="Limpiar"> <!-- Boton de Restablecer -->
	 <input class="boton_busc" type="submit" Value="Enviar" name="Enviar"/> <!-- Boton de enviar consulta -->
	 </form>
	 </td>
	</table></center>
	<br><br><br><br><br><br><br><br><br>

</body>
<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->
</html>
<?php require_once "vistas/parte_inferior.php"?>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->