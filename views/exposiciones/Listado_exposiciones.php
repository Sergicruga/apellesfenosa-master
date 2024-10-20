<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Exposiciones</title>
    <link rel="stylesheet" href="styles/exposiciones/listado_exposiciones.css">
</head>
<body>
    <div class="header">
        <img src="images/login/Logo.png" alt="Logo">
    
        <div class="actions">
            <a href="index.php?controller=Exposiciones&action=crear" class="create-button">Crear Exposició</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data Inici</th>
                <th>Data Fi</th>
                <th>Tipus</th>
                <th>Lloc</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exposiciones as $expo): ?>
                <tr>
                    <td><?php echo $expo['id_exposicion']; ?></td>
                    <td><?php echo $expo['fecha_inicio_expo']; ?></td>
                    <td><?php echo $expo['fecha_fin_expo']; ?></td>
                    <td><?php echo $expo['tipo_exposicion']; ?></td>
                    <td><?php echo $expo['sitio_exposicion']; ?></td>
                    <td><a href="index.php?controller=Exposiciones&action=editar&id=<?php echo $expo['id_exposicion']; ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
