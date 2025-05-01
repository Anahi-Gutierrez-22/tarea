<?php
include '../modelos/conexion.php';
$estudiantes = $conexion->query("SELECT * FROM estudiantes WHERE id NOT IN (SELECT estudiante_id FROM asistencias WHERE DATE(fecha) = CURDATE())");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tomar Asistencia</title>
    <link rel="stylesheet" href="../vistas/color.css">
</head>
<body>

<h1>Tomar Asistencia</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>CI</th>
        <th>RU</th>
        <th>Acción</th>
    </tr>
    <?php while($row = $estudiantes->fetch_assoc()): ?>
    <tr id="fila-<?php echo $row['id']; ?>">
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['ci']; ?></td>
        <td><?php echo $row['ru']; ?></td>
        <td>
            <form action="../controlador/registrar_asistencia.php" method="POST">
                <input type="hidden" name="estudiante_id" value="<?php echo $row['id']; ?>">
                <button type="submit">Asistió</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="control_de_asistencia.php" style="margin-top: 20px; display: inline-block;">Volver a inicio</a>

</body>
</html>