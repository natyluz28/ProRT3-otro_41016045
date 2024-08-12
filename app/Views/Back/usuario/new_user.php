<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Usuario</title>
    <!-- Incluye aquí los archivos CSS de Bootstrap u otros estilos necesarios -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public\styles\styles_new_user.css') ?>"> <!-- Enlace a tu archivo CSS personalizado -->
</head>
<body style="background-color: #f4f4f4; color: #333;">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="p-4 bg-white shadow rounded">
                    <h2 class="text-center mb-4">Agregar Nuevo Usuario</h2>
                    
                    <!-- Formulario para agregar un nuevo usuario -->
                    <form action="<?= base_url('usuario_controller/saveNewUser') ?>" method="post">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= set_value('nombre') ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" value="<?= set_value('apellido') ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" value="<?= set_value('usuario') ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                            <a href="<?= base_url('panel') ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye aquí los archivos JS de Bootstrap u otros scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
