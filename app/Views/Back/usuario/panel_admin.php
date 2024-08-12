<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Incluye aquí los archivos CSS de Bootstrap u otros estilos necesarios -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('styles/panel_administracion.css') ?>"> <!-- Enlace a tu archivo CSS personalizado -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            margin-top: 30px;
        }
        h1 {
            color: #343a40;
        }
        table {
            background-color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mb-4">Panel de Administración</h1>
        <h2 class="text-center mb-4">Usuarios Logueados</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($usuarios)): ?>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?= esc($usuario['perfil_id']); ?></td>
                                <td><?= esc($usuario['usuario']); ?></td>
                                <td><?= esc($usuario['email']); ?></td>
                                <td><?= esc($usuario['nombre']); ?></td>
                                <td><?= esc($usuario['apellido']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">No hay usuarios logueados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Incluye aquí los archivos JS de Bootstrap u otros scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
