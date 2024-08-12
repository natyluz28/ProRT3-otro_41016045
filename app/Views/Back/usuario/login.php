<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('styles/iniciar_sesion.css') ?>"> <!-- Enlace al archivo CSS -->
</head>
<body style="background-color: #333; color: #fff;">

<!-- Main Content -->
<section class="my-5 d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="p-4 shadow-lg rounded-lg" style="background-color: #fff; color: #333; max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <h2 class="mt-3">Iniciar Sesión</h2>
        </div>
        
        <!-- Mensajes de Error -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de Inicio de Sesión -->
        <form method="post" action="<?= base_url('backend/iniciar_sesion') ?>">
            <?= csrf_field(); ?>
            
            <div class="form-group mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                <?php if (isset($validation) && $validation->getError('correo')): ?>
                    <div class="alert alert-danger"><?= $validation->getError('correo'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                <?php if (isset($validation) && $validation->getError('password')): ?>
                    <div class="alert alert-danger"><?= $validation->getError('password'); ?></div>
                <?php endif; ?>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary w-50">Ingresar</button>
                <a href="<?= base_url('/') ?>" class="btn btn-secondary w-50">Cancelar</a>
            </div>

            <div class="mt-3 text-center">
                <span>¿Aún no se registró? <a href="<?= base_url('registro') ?>">Regístrese aquí</a></span>
            </div>
        </form>
    </div>
</section>

</body>
</html>
