<?php
/* Empezar a llenar el buffer, para enviar todo el contenido html, para meterlo en una sola variable, y despues pasarlo a DOMPDF*/
ob_start();


?>
<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en-Es">
<body>

<!-- Se estan jalando los registros de nuestra Base de datos test con la tabla solic -->

 <?php
 $conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión :(");
		$registros=mysqli_query($conexion,"select * from solic") or die 
				("Problemas en el select:".mysqli_error($conexion));
				
				echo "<img src='../Images/log_peq.jpg'> <!-- Logo de UNELLEZ -->
				<center><h2 name='title'>S O L I C I T U D</h2></center>
				<p align = 'justify'>Quien suscribe, <b>Freddy Restrepo</b>
				titular de la Cédula de Identidad Nº <b>V-12.435.678</b>,  en  mi  condición 
				de encargado departamento de mantenimiento en la Universidad Nacional 
				Experimental de los Llanos Occidentales Ezequiel  Zamora UNELLEZ,
				designado mediante  Gaceta Oficial  de la República Bolivariana  de
				Venezuela Nº 40.871,  Resolución N° 046  de  fecha 17/03/2016,  
				informo que este Despacho de mantenimiento, se esta evaluando los siguiente casos:</p><br>";
				
				echo "<table border='1'>
				<tr>
					<td><b>CI Solicitante</b></td>
					<td><b>Nombre Solicitante</b></td>
					<td><b>Nombre del Equipo</b></td>
					<td><b>Serial del Equipo</b></td>
					<td><b>Averia</b></td>
					<td><b>Encargado</b></td>
					<td><b>Nombre encargado</b></td>
					<td><b>CI Encargado</b></td>
					<td><b>N°</b></td>
					<td><b>Fecha</b></td>
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
	<center><p><br><br><br>
Atentamente,<br><br><br><br>

<b>ENCARGADO DEPARTAMENTO<br>
</center>
</b></p><br><br><br>
<br><br><br><br><br><br><br><br><br><br><p><b>c.c. VRS<br>
c.c. DSG</b><br><br>AQ/JG</p></div>

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
$dompdf->stream("archivo_.pdf", array("Attachment" => false));

?>

