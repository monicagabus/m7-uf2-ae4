<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Restaurante</title>
</head>
<body>
    <h1>Reserva Restaurante</h1>
    <?php
    $restaurante = isset($_GET['restaurante']) ? urldecode($_GET['restaurante']) : '';
    ?>
    <form action="procesar_reserva.php" method="POST">
        <input type="hidden" name="nombre_restaurante" value="<?php echo htmlspecialchars($restaurante); ?>">

        <label for="restaurante_seleccionado">Nombre del Restaurante:</label>
        <input type="text" id="restaurante_seleccionado" value="<?php echo htmlspecialchars($restaurante); ?>" disabled required><br><br>
        
        <label for="fecha">Fecha de la Reserva:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>
        
        <input type="submit" value="Hacer Reserva">
    </form>
</body>
</html>