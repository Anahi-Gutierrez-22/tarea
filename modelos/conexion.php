<?php
$conexion = new mysqli("localhost", "root", "root", "control_de_asistencias");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>