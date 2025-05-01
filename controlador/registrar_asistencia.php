<?php
include '../modelos/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['estudiante_id'])) {
    $estudiante_id = $_POST['estudiante_id'];

    $stmt = $conexion->prepare("INSERT INTO asistencias (estudiante_id) VALUES (?)");
    $stmt->bind_param("i", $estudiante_id);

    if ($stmt->execute()) {
        header('Location: ../vistas/tomar_asistencia.php');
        exit;
    } else {
        echo "Error al registrar asistencia.";
    }
}
?>