<?php require_once "vistas/parte_superior.php"?> <!-- Para mostrar la parte superior -->


<!--INICIO del cont principal-->
<div class="container">
  
<big><strong>Resultado de operación:</strong></big><br>

<?php

$conexion=mysqli_connect("localhost", "root", "", "crud_2022") or die ("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO solic (ci, nombre_solic, nombre_equipo, serial_equipo, averia, cargo, nombre_tec, ci_tec, cod_solic, fecha_solic) 
VALUES ('$_POST[ci]', '$_POST[nombre_solic]', '$_POST[nombre_equipo]', '$_POST[serial_equipo]', '$_POST[averia]', '$_POST[cargo]', '$_POST[nombre_tec]', '$_POST[ci_tec]', '$_POST[cod_solic]', '$_POST[fecha_solic]')")
 or die ("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

    echo "<b>¡El Formulario fue enviado con exito!.</b>";

?>

<br><br><br><a href="solic.php" class="boton">Llenar nueva solicitud</a><br><br><br><br>
<a href="index.php" class="boton">volver al inicio</a>


<?php require_once "vistas/parte_inferior.php"?>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->