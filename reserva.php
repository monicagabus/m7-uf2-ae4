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
    <form id="formReserva" onsubmit="validarFormulario(event)">
        <input type="hidden" name="nombre_restaurante" value="<?php echo htmlspecialchars($restaurante); ?>">

        <label for="restaurante_seleccionado">Nombre del Restaurante:</label>
        <input type="text" id="restaurante_seleccionado" value="<?php echo htmlspecialchars($restaurante); ?>" disabled required><br><br>
        
        <label for="fecha">Fecha de la Reserva:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>
        
        <label for="numero_personas">Número de Personas:</label>
        <input type="number" id="numero_personas" name="numero_personas" min="1" required><br><br>

        <input type="submit" value="Hacer Reserva">
    </form>
    <script>
        function validarFormulario(event) {
            event.preventDefault(); 

            const fecha = document.getElementById('fecha').value;
            const numeroPersonas = document.getElementById('numero_personas').value;
            const fechaReserva = new Date(fecha);
            const fechaActual = new Date();
            fechaActual.setHours(0, 0, 0, 0); 
            if (fechaReserva < fechaActual) {
                alert('La fecha de reserva no puede ser una fecha pasada.');
                return false;
            }

            const regexNumPersonas = /^[1-9]|[1-4][0-9]|50$/; 
            if (!regexNumPersonas.test(numeroPersonas)) {
                alert('Número de personas no válido. Debe ser un número entre 1 y 50.');
                return false;
            }

            alert('La reserva se ha procesado con éxito.');
            window.location.href = 'index.php'; 
            return true;
        }
    </script>
</body>
</html>