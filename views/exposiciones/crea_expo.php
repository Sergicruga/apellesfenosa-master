<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Exposición</title>
</head>
<body>
    <form action="index.php?controller=Exposiciones&action=crearNuevo" method="post">
        <label for="exposicion">Exposició</label>
        <input type="text" id="exposicion" name="exposicion"><br><br>

        <label for="inicio">Data inici expo.</label>
        <input type="date" id="inicio" name="inicio" required><br><br>

        <label for="fin">Data fi expo.</label>
        <input type="date" id="fin" name="fin" required><br><br>

        <label for="tipo">Tipus exposició</label>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <label for="lugar">Lloc exposició</label>
        <input type="text" id="lugar" name="lugar" required><br><br>

        <input type="submit" value="Crear Exposición">
    </form>
</body>
</html>
