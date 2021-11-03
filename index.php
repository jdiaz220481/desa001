<?php
//!--echo phpinfo();
//echo "Hola Mundo !!!"
$servername = "mysql-service"; // Nombre/IP del servidor
$database = "test"; // Nombre de la BBDD
$username = "root"; // Nombre del usuario
$password = "mysq_l12345"; // Contraseña del usuario
// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);
// Comprobamos la conexión
if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión satisfactoria";
mysqli_close($con);
?>
