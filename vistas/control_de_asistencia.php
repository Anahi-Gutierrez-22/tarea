<?php
include '../modelos/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencia</title>
    <link rel="stylesheet" href="../vistas/color.css">
</head>
<body>

<div class="barra_superior">

<a href="../vistas/tomar_asistencia.php">
    <button style="margin-top: 20px;">Tomar Asistencia</button>
</a>
<a href="../vistas/editar_asistencia_vistas.php">
    <button style="margin-top: 20px;">Eliminar asistencia</button>
</a>
<a href="../vistas/lista_asistencia_vista.php">
    <button style="margin-top: 20px;">Lista de asistencia</button>
</a>
</div>

<h1>Registrar Estudiante</h1>
<form action="../controlador/registrar_estudiantes.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo del estudiante" required>
     <br>
    <input type="text" name="ci" placeholder="CI del estudiante" required>
    <br>
    <input type="text" name="ru" placeholder="RU del estudiante" required>
    <br>
    <button type="submit">Registrar</button>
    
</form>

</body>
</html>