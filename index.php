<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/mobile.css">
    <title>Cita Previa.</title>
</head>

<body>
    <?php include('partials/header.php'); ?>

    <div class="group">
        <form action="registro.php" method="POST">
            <h2>Formulario de Registro</h2>
            <label for="servicio">Servicio</label>
            <select name="servicio" id="servicio">
                <option>Administracion</option>
                <option>Tienda</option>
                <option>Club deportivo</option>
            </select>
            <label for="fecha">Fecha</label>
            <input  type="date" name="fecha" step="1"
            min="2022-01-01" max="2025-12-31"
            value=<?php echo date("Y-m-d"); ?>>
            <label for="hora">Hora</label>
            <input type="time" name="hora" value="09:30" max="15:00" min="09:00" step="1">
            <label for="campos">Los campos con * son obligatorios.</label>
            <label for="nombre">Nombre * </label>
            <input type="text" name="nombre" class="form-input" required />
            <label for="apellidos">Apellido * </label>
            <input type="text" name="apellidos" class="form-input" required />
            <label for="telefono">Telefono * </label>
            <input type="text" name="telefono" class="form-input" required />
            <label for="email">Email * </label>
            <input type="email" name="email" class="form-input" />

            <input class="form-btn" name="submit" type="submit" value="Enviar" />
            <input type="checkbox" name="politica" id="politica">
            <label for="email">Acepto la politica de privacidad</label>
        </form>
    </div>

    <?php include('partials/footer.php'); ?>
</body>

</html>