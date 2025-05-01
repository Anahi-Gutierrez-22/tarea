<?php
include '../modelos/conexion.php';

$resultado = $conexion->query("SELECT estudiantes.nombre, estudiantes.ci, estudiantes.ru, asistencias.fecha FROM asistencias JOIN estudiantes ON asistencias.estudiante_id = estudiantes.id");
?>