<?php
include '../modelos/conexion.php';

$nombre = $_POST['nombre'];
$ci = $_POST['ci'];
$ru = $_POST['ru'];

try {
    $stmt = $conexion->prepare("INSERT INTO estudiantes (nombre, ci, ru) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $ci, $ru);
    if ($stmt->execute()) {
      header("Location: ../vistas/control_de_asistencia.php");
      exit;
    } else {
      throw new Exception("Error al insertar: " . $stmt->error);
    }
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
