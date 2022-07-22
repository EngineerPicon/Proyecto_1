<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>

<?php
/* Empezar a llenar el buffer, para enviar todo el contenido html, para meterlo en una sola variable, y despues pasarlo a DOMPDF*/
ob_start();


?>
<!DOCTYPE html>
<html lang="en-Es">
  <link rel="icon" href="../Images/favicon.ico"> <!-- Vinculo llamado ico pestaña -->
  
  <title>Historial de Solicitudes</title>
<body>


<p><img src='../Images/log_peq.jpg'"></p><br><br> <!-- Logo de UNELLEZ -->
<?php
$conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión :(");
		$registros=mysqli_query($conexion,"select * from solic") or die 
				("Problemas en el select:".mysqli_error($conexion));
				echo "<center><h3>Historial de Solicitudes</h3></center>";
				echo "<table border='1'>
				<tr>
					<td><b>Cédula de identidad solicitante</b></td>
					<td><b>Nombre Solicitante</b></td>
					<td><b>Nombre del Equipo</b></td>
					<td><b>Serial del Equipo</b></td>
					<td><b>Averia</b></td>
					<td><b>Encargado</b></td>
					<td><b>Nombre del encargado</b></td>
					<td><b>Cédula de identidad del encargado</b></td>
					<td><b>N°</b></td>
					<td><b>Fecha de Solicitud</b></td>
					
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
					
				}
		echo "</table";
	mysqli_close($conexion);
	
?>
</body>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->
</html>

<?php
$html=ob_get_clean();
//echo $html;

require_once 'lib/dompdf/autoload.inc.php';
/* Objeto Dompdf */
use Dompdf\Dompdf;
$dompdf = new Dompdf();

/*opción para mostrar imagenes*/
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnable' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

/* Crear el documento formato Carta*/
$dompdf->setPaper('letter');

$dompdf->render();
/* para descargar y visualizar
   En este caso solo queremos que sea visualizado */
$dompdf->stream("Historial_Tabla_PDF.pdf", array("Attachment" => false)); /*nombre del archivo una vez descargado*/

?>

<?php require_once "vistas/parte_inferior.php"?>

<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->