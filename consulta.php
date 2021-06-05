<?php
//Configuracion de la conexion a base de datos
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$host = "localhost"; 
$usuario = "root"; 
$password = ""; 
$bd = "millenium"; 
$sql = "mysql:host=$host;dbname=$bd;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
//crear nueva conexión
try { 
    $pdo = new PDO($sql, $usuario, $password, $dsn_Options);
} catch (PDOException $error) {
    echo "Connection error:".$error->getMessage();
}
try {
    $query = $pdo->prepare('INSERT INTO datos(Nombre, Apellido) VALUES (?,?)');
    $arrData = array($nombre,$apellido);
    $query->execute($arrData);
    echo "guardado";
    die;
} catch (PDOException $e){
    echo "No se pudo guardar los datos: ".$e->getMessage();
    die;
}
?>