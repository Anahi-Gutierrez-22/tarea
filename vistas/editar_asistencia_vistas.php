<?php
include '../modelos/editar_asistencia.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Asistencia</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>

<h1> Eliminar Asistencias</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>CI</th>
        <th>RU</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>
    <?php while($fila = $asistencias->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['ci']; ?></td>
        <td><?php echo $fila['ru']; ?></td>
        <td><?php echo $fila['fecha']; ?></td>
        <td>
            <form action="../controlador/eliminar_asistencia.php" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta asistencia?');">
                <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="control_de_asistencia.php" style="display: inline-block; margin-top: 20px;">Volver al inicio</a>

</body>
</html>