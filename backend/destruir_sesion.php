<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión Destruida</title>
    <link rel="stylesheet" href="../frontend/estilos.css">
</head>
<body>
    <div class="container">
        <h1>¡Sesión Destruida!</h1>
        <div class="mensaje">
            <h2>✓ Todas las variables de sesión han sido eliminadas</h2>
            <p>La función <strong>session_destroy()</strong> ha eliminado todos los datos de la sesión actual.</p>
        </div>
        <div style="margin-top: 30px;">
            <a href="../frontend/formulario.html" class="boton">Crear Nueva Sesión</a>
            <a href="ver_sesion.php" class="boton">Verificar Sesión</a>
        </div>
    </div>
</body>
</html>