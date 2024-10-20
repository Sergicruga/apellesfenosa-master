<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Exposición</title>
</head>
<body>
    <form action="index.php?controller=Exposiciones&action=update&id=<?php echo $expo['id_exposicion']; ?>" method="post">
        <label for="inicio">Data inici expo.</label>
        <input type="date" id="inicio" name="inicio" value="<?php echo $expo['fecha_inicio_expo']; ?>" required><br><br>

        <label for="fin">Data fi expo.</label>
        <input type="date" id="fin" name="fin" value="<?php echo $expo['fecha_fin_expo']; ?>" required><br><br>

        <label for="tipo">Tipus exposició</label>
        <input type="text" id="tipo" name="tipo" value="<?php echo $expo['tipo_exposicion']; ?>" required><br><br>

        <label for="lugar">Lloc exposició</label>
        <input type="text" id="lugar" name="lugar" value="<?php echo $expo['sitio_exposicion']; ?>" required><br><br>

        <input type="submit" value="Guardar Canvis">
    </form>
</body>
</html>
