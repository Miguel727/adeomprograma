<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

/*si biene información de la base de datos con ñ o tildes
 va afuncionar correctamente por la codificación utf8*/
mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}