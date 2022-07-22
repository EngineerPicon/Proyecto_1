<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
$config = include 'config.php';

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

  if (isset($_POST['ci'])) {
    $consultaSQL = "SELECT * FROM solic WHERE ci LIKE '%" . $_POST['ci'] . "%'";
  } else {
    $consultaSQL = "SELECT * FROM solic";
  }

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $solic = $sentencia->fetchAll();

} catch(PDOException $error) {
  $error= $error->getMessage();
}

$titulo = isset($_POST['ci']) ? 'Lista de Solicitudes (' . $_POST['ci'] . ')' : 'Lista de Solicitudes';
?>

<?php 
    if($_GET['del'])
    {
        $id=$_GET['del'];
        $query=mysqli_query($mysqli, "DELETE FROM datos WHERE id='$id'");
        header("location_tabla.php");
    }
?>

<?php include "templates/header.php"; ?>

<?php
if ($error) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="crear.php"  class="btn btn-primary mt-4">Crear Solicitud</a>
	
      <a href="index.php"  class="btn btn-primary mt-4">Regresar a Inicio</a>
	
      <hr>
      <form method="post" class="form-inline">
        <div class="form-group mr-3">
          <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
        </div>
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
        <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-3"><?= $titulo ?></h2>
      <table class="table">
        <thead>
          <tr>
		    <th>ID</th>
            <th>Cédula de Identidad del solicitante</th>
			<th>Nombre del solicitante</th>
			<th>Nombre del Equipo</th>
		    <th>Serial del Equipo</th>
			<th>Averia</th>
			<th>Encargado</th>
			<th>Nombre del encargado</th>
			<th>Cédula de identidad del encargado</th>	
			<th>Código de solicitud</th>
			<th>Fecha de Solicitud</th>
            <th>Acciones</th>
          </tr>
        </thead>
		
		<?php
            $query = mysqli_query($mysqli,"SELECT id, ci, nombre_solic, nombre_equipo, serial_equipo, averia, cargo, nombre_tec, ci_tec, cod_solic, fecha_solic FROM solic");
            while($registro=mysqli_fetch_array($query))
            {
                echo('<tr>');
					echo("<td>".$registro['id']."</td>");
                    echo("<td>".$registro['ci']."</td>");
                    echo("<td>".$registro['nombre_solic']."</td>");
                    echo("<td>".$registro['nombre_equipo']."</td>");
					echo("<td>".$registro['serial_equipo']."</td>");
					echo("<td>".$registro['averia']."</td>");
					echo("<td>".$registro['cargo']."</td>");
					echo("<td>".$registro['nombre_tec']."</td>");
					echo("<td>".$registro['ci_tec']."</td>");
					echo("<td>".$registro['cod_solic']."</td>");
					echo("<td>".$registro['fecha_solic']."</td>");
            ?>
            
                    <td> <a href='#' onclick="preguntar(<?php echo $registro['id']?>)">🗑️Borrar</a> </td>
					<a href="<?= 'editar.php?id=' . escapar($fila["id"]) ?>">✏️Editar</a>
            <?php
                echo('</tr>');    
            }
            ?>
      </table>

    </div>
  </div>
</div>
	        <script type="text/javascript">
            function preguntar(id)
            {
                if(confirm('¿Estás seguro que deseas borrar?'))
                {
                    window.location.href = "tabla.php?del="+id;
                }
            }
        </script>


<?php include "templates/footer.php"; ?>