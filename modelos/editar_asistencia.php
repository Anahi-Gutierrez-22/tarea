<?php
include '../modelos/conexion.php';

try {
    $asistencias = $conexion->query("SELECT asistencias.id, estudiantes.nombre, estudiantes.ci, estudiantes.ru, asistencias.fecha FROM asistencias JOIN estudiantes ON asistencias.estudiante_id = estudiantes.id ORDER BY asistencias.fecha DESC ");
    if (!$asistencias) {
      throw new Exception("Error al ejecutar la consulta: " . $conexion->error);
    }
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
