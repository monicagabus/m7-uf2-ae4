<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Reserva</title>
</head>
<body>
    <h1>Procesar Reserva</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_restaurante = isset($_POST['nombre_restaurante']) ? htmlspecialchars($_POST['nombre_restaurante']) : '';
        $fecha = isset($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : '';
        $numero_personas = isset($_POST['numero_personas']) ? htmlspecialchars($_POST['numero_personas']) : '';

        if (!empty($nombre_restaurante) && !empty($fecha) && !empty($numero_personas)) {
            echo "<p>Reserva realizada con éxito en <strong>$nombre_restaurante</strong>.</p>";
            echo "<p>Fecha de la reserva: <strong>$fecha</strong>.</p>";
            echo "<p>Número de personas: <strong>$numero_personas</strong>.</p>";
        } else {
            echo "<p>Error: Falta información vuelve a <a href='reserva.php'>intentar.</a></p>";
        }
    } else {
        echo "<p>No se recibieron datos del formulario vuelve a <a href='reserva.php'>intentar.</a></p>";
    }
    ?>
</body>
</html>