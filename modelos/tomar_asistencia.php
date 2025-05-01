<?php
include '../modelos/conexion.php';

// Traer estudiantes
$estudiantes = $conexion->query("SELECT * FROM estudiantes");
?>
