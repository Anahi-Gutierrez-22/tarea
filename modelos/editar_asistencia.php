<?php
include '../modelos/conexion.php';

$asistencias = $conexion->query("SELECT asistencias.id, estudiantes.nombre, estudiantes.ci, estudiantes.ru, asistencias.fecha 
    FROM asistencias 
    JOIN estudiantes ON asistencias.estudiante_id = estudiantes.id 
    ORDER BY asistencias.fecha DESC
");
?>
