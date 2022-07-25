<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = MD5($_POST['password']);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito :)';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="Images/favicon.ico"> <!-- Vinculo llamado ico pestaña -->
	    <title>Registrarse - CTSI</title> <!-- Título para la pestaña -->
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
    </head>
    
    <body>
<!-- Código de cabecera del sistema -->
 	    <?php include 'partials/header.php' ?>
<!-- Fin de código cabecera del sistema -->
		

 <div class="container-login"> 
        <div class="wrap-login">
		<a href="index.php"><img src='./images/logo_peq.jpg'></a><br><br> <!--logo de la institución -->
         				<a class="boton_iniciosesion" href="sesion.php">Iniciar Sesión</a><br><!-- Boton iniciar sesión -->
                <span class="login-form-title"><br>Registrarse</span>	   
			

			<?php if(!empty($message)): ?>
      <p> <?= $message ?></p> 
    <?php  endif;  ?>
	
	<form action="signup.php" method="POST">
      <div class="wrap-input100">
					  <input class="input100" name="usuario" type="text" required=""  placeholder="Usuario">
					  <span class="focus-efecto"></span>
					  
					  </div>
		<div class="wrap-input100">
					  <input class="input100" name="password" type="password" required="" id="password" placeholder="Ingrese su clave">
					  <span class="focus-efecto"></span>
					  </div>
					  <div class="wrap-input100">
						  <input class="input100" name="confirm_password" type="password" required="" id="password2" placeholder="Confirme su clave">
						  <span class="focus-efecto"></span>			  
					  </div>
					<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>
				 <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">ENVIAR</button>
                    </div>

	</form>	 
</div>
</div>  		
      <script src="jquery/jquery-3.3.1.min.js"></script>    
		 <script src="bootstrap/js/bootstrap.min.js"></script>    
     	 <script src="popper/popper.min.js"></script>    
	     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
		 <script src="codigo.js"></script> 
		 <script src="formulario.js"></script>
	 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- Salto de lineas -->
<!-- Código de pie de página -->
 	<?php include 'partials/footer.php' ?>
<!-- Fin de código cabecera de página --> 
</body>
<!-- Desarrollado por: Rolando Picon - © Todos los derechos reservados 2022 -->
</html>

