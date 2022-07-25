<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login_2019';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>

<!-- Programador Ana Angel 2022
	Si puedes ver esto es que se hizo 
	el llamado de conexion correcto de 
	base de datos php_login_database
-->