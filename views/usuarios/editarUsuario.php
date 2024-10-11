<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="styles/usuarios/listado_usuarios.css">
</head>
<body>
<div class="header">
        <img src="views/obras/Logo2.png" alt="Logo">
    </div>
    <h2>Editar Usuario</h2>
    <div class="editar">
        <form action="index.php?controller=Usuaris&action=updateUser" method="POST">
            <input type="hidden" name="nombre_original" value="<?= $user['nombre_usuario']; ?>">
            <input type="text" name="name" value="<?= $user['nombre_usuario']; ?>" required placeholder="Nombre de usuario">
            <select id="rol" name="rol">
                <option value="convidat" <?= $user['rol_usuario'] == 'convidat' ? 'selected' : '' ?>>Convidat</option>
                <option value="tecnic" <?= $user['rol_usuario'] == 'tecnic' ? 'selected' : '' ?>>Tècnic</option>
                <option value="admin" <?= $user['rol_usuario'] == 'admin' ? 'selected' : '' ?>>Administrador</option>
            </select>
            <select name="activo">
                <option value="activo" <?= $user['activo'] == 'activo' ? 'selected' : '' ?>>Activo</option>
                <option value="inactivo" <?= $user['activo'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
            </select>

            <button type="submit">Guardar cambios</button>
        </form>

    </div>
</body>
</html>