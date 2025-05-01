<?php
include '../modelos/lista_de_asistencia.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Asistencias</title>
    <link rel="stylesheet" href="../vistas/color.css"> 
</head>
<body>

<h1>Lista de Asistencias</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>CI</th>
        <th>RU</th>
        <th>Fecha de asistencia</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['ci']; ?></td>
        <td><?php echo isset($fila['ru']) ? $fila['ru'] : ''; ?></td>
        <td><?php echo $fila['fecha']; ?></td>
    </tr>
    <?php } ?>
</table>
<a href="control_de_asistencia.php" style="margin-top: 20px; display: inline-block;">Volver a inicio</a>

</body>
</html>