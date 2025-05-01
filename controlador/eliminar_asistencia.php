<?php
include '../modelos/conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Consulta segura
    $stmt = $conexion->prepare("DELETE FROM asistencias WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirige de nuevo a la vista
        header('Location: ../vistas/editar_asistencia_vistas.php');
        exit;
    } else {
        echo "Error al eliminar asistencia.";
    }
} else {
    echo "ID no recibido.";
}
?>