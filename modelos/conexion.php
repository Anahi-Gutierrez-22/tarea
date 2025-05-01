<?php
try {
    $conexion = new mysqli("localhost", "root", "root", "control_de_asistencias");
    if ($conexion->connect_error) {
      throw new Exception("Error de conexión: " . $conexion->connect_error);
    }
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit;
  }
?>
