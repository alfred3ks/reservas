<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva tu cita.</title>
</head>

<body>
    <?php include('partials/header.php'); ?>

    <div class="group">
        <form action="registro.php" method="POST">
            <h2><Formulario de Registro</h2>
            <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
            <input type="text" name="nombre" class="form-input" required />
            <label for="apellidos">Apellidos <span><em>(requerido)</em></span></label>
            <input type="text" name="apellidos" class="form-input" required />
            <label for="telefono">Telefono <span><em>(requerido)</em></span></label>
            <input type="text" name="telefono" class="form-input" required />
            <label for="email">Email <span><em>(requerido)</em></span></label>
            <input type="email" name="email" class="form-input" />
            <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
            <input  type="date" name="fecha" step="1"
                    min="2022-01-01" max="2025-12-31"
                    value=<?php echo date("Y-m-d"); ?>>
            <label for="hora">Hora <span>(requerido)</span></label>
            <input type="time" name="hora" value="09:30" max="15:00" min="09:00" step="1">
            <input class="form-btn" name="submit" type="submit" value="Realizar reserva" />
            </p>
        </form>
    </div>

    <?php include('partials/footer.php'); ?>
</body>

</html>