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

<body>


 <!-- Esto es el volcado de la presentacion del formato de PDF de la solicitud individual-->
 	<?php 
			$conexion=mysqli_connect("localhost","root","","crud_2022") or die ("Problemas con la conexión");
			$registros=mysqli_query($conexion,"select * from solic where ci='$_POST[datoBuscar]'")or die("Problemas en el select:".mysqli_error($conexion));
			if($reg=mysqli_fetch_array($registros))
			{
				echo "<img src='../Images/log_peq.jpg'> <!-- Logo de UNELLEZ -->
				<center><h2 name='title'>S O L I C I T U D</h2></center>
				<p align = 'justify'>Quien suscribe, <b>".$reg['nombre_tec']."</b>
				titular de la Cédula de Identidad Nº <b>".$reg['ci_tec']."</b>,  en  mi  condición 
				de encargado departamento de mantenimiento en la Universidad Nacional 
				Experimental de los Llanos Occidentales Ezequiel  Zamora UNELLEZ,
				designado mediante  Gaceta Oficial  de la República Bolivariana  de
				Venezuela Nº 40.871,  Resolución N° 046  de  fecha 17/03/2016,  
				informo que este Despacho de mantenimiento, se esta evaluando el siguiente caso: </p><br>";
				
				
				echo "Cédula de Identidad del solicitante: ".$reg['ci']."<br>";
				echo "Nombre del Solicitante: ".$reg['nombre_solic']."<br>";
				echo "Nombre del Equipo: ".$reg['nombre_equipo']."<br>";
				echo "Serial del Equipo: ".$reg['serial_equipo']."<br>";
				echo "Averia: ".$reg['averia']."<br>";
				echo "Código de solicitud: ".$reg['cod_solic']."<br>";
				echo "Fecha de Solicitud: ".$reg['fecha_solic']."<br>";
				
				echo "<center></p><br><br><br>
				Atentamente,<br><br><br><br>
				<b>ENCARGADO DEPARTAMENTO<br>
				</center>
				</b></p><br><br><br>
				<br><br /><p><b>c.c. VRS<br>
				c.c. DSG</b><br><br>AQ/JG</p></div>";
			}else{
				echo "<h1>Oops, Algo salió mal!!, No existe número de Cédula </h1>";
				echo "<h1>en la base de datos Solicitudes</h1>";
			}
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
$dompdf->stream("archivo_.pdf", array("Attachment" => false));

?>