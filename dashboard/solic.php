<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->
 
<!--INICIO del cont principal-->
<div class="container">

<title>Formulario Registro</title> 
 
 
 <main>
        <section>
    <form action="Home.php" method="post">
        <div class="container">
            <div class="div1">
                <h3>Por favor, Complete el Formulario, para llenar un registro en nuestra base de datos</h3>
            </div>
        </div>
    </form>
</section>

    </main>

    <script src="js/script_menu.js"></script>
	
<!-- Código formulario basico, funcionable -->
<table border="1">
		<tr>
			<th colspan="2"><big><strong>Formulario Solicitudes</strong></big></th>
		</tr>
	<td><center>
	<div class="form"> 
		<form action="guardar_solic.php" method="POST">  	
			    <input type="text" name="ci" value="" id="codigo1" placeholder="N° de cédula Solicitante" required=""><br>
			    <input type="text" name="nombre_solic" value="" placeholder="Nombre del solicitante" required="" ><br>
			    <input type="text" name="nombre_equipo" value="" placeholder="Nombre del Equipo" required="" ><br>
			    <input type="text" name="serial_equipo" value="" placeholder="Serial del Equipo" required=""  maxlength="12"><br>
			    <input type="text" name="averia" value="" placeholder="Averia" required="">
			  </td>
			<td>
				<input type="text" name="cargo" value="" placeholder="Jerarquia del Encargado" required=""><br>
			    <input type="text" name="nombre_tec" value="" placeholder="Nombre del encargado" required=""><br>
				<input type="text" name="ci_tec" value="" id="codigo2" placeholder="N° de Cedula encargado" required=""><br>
				<input type="text" name="cod_solic" value="" placeholder="Código de Solicitud" required="" maxlength="5"<br>
			</td>
			<td>
			<!-- <center>Fecha actual:
			<input name="fecha_solic" id="fecha_actual" readonly><script>
			var f = new Date();
			document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
			
			</script> 
			-->
			<!--Limitamos los campos de ingreso de fecha SOLO EL MES DE JULIO 2022 -->
			 <!-- <center>Fecha actual: <input type="date" name="fecha_solic" min='2022-07-17' max='2022-07-31' > -->
			    <center>Fecha actual: <input name="fecha_solic" type="text" size="32" value="<?php echo date('d-m-Y'); ?>" onFocus="blur()">
			<br>
			   
			 </select><br/><br> 
			<input class="boton" type="reset" value="Limpiar">
			<input class="boton" type="submit" value="Enviar">
			</td>
		</form>
	</div></center></td>
</table>

<!-- fin de código formulario -->

</body>
<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->
</html>
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>