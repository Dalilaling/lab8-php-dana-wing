<?php
// archivo que contiene la función para cargar mis datos
require_once __DIR__ . '/../lib/estudiante.php';

// guarda mis datos en la variable $est para usarlos después
$est = cargar_estudiante();

/* configuracion de la zona horaria a América/Panamá */
date_default_timezone_set('America/Panama');

# Obtenemos la versión de PHP 
$version_php = PHP_VERSION;

// Preparamos la fecha y hora actual con el formato solicitado: dd/mm/aaaa HH:mm
$fecha_actual = date('d/m/Y H:i');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        //  El título se genera concatenando "Lab 8 -" y el apellido.
        echo 'Lab 8 - ' . $est['apellido']; 
        ?>
    </title>
</head>
<body>
    <!-- se muestra el nombre completo en un encabezado h1 usando sintaxis corta de PHP -->
    <h1><?= $est['nombre'] . ' ' . $est['apellido'] ?></h1>
    
    <?php
    #  se uso la instrucción echo para imprimir la versión de PHP dentro de un párrafo.
    echo "<p>Versión de PHP: " . $version_php . "</p>";
    
    /*  se uso la instrucción print para mostrar la fecha y hora actual */
    print "<p>Fecha y hora actual: " . $fecha_actual . "</p>";
    ?>
</body>
</html>