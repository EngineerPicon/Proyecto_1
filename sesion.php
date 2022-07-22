<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="Images/favicon.ico"> <!-- Vinculo llamado ico pestaña -->
	    <title>Iniciar Sesión - CTSI</title><!-- Título para la pestaña -->		
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
    </head>
    <body>
<!-- Código de cabecera del sistema -->
	    <?php include 'partials/header.php' ?>
<!-- Fin de código cabecera del sistema -->
<main>		  
      <div class="container-login">
        <div class="wrap-login">
		<a href="index.php"><img src='./images/logo_peq.jpg'></a><br> <!--logo de la institución -->
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title"><br>Iniciar Sesión</span>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Contraseña">
                    <span class="focus-efecto"></span>
                </div>
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">INGRESAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
<!-- librerias a usar -->       
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>   
<br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- Salto de lineas -->
<!-- Código de pie de página -->
 	<?php include 'partials/footer.php' ?>
<!-- Fin de código cabecera de página -->     
    </body>
</html>
<!-- Desarrollado por: ANA ANGEL - © Todos los derechos reservados 2022 -->