<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Patitas Salvajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('public/styles/iniciar_sesion.css'); ?>">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Iniciar Sesión - Patitas Salvajes</h2>

        <!-- Mensajes de Error -->
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de Inicio de Sesión -->
        <div class="d-flex justify-content-center">
            <div class="form-register p-4 border rounded shadow-sm" style="width: 100%; max-width: 400px;">
                <form method="post" action="<?= base_url('/usuario_controller/iniciar_sesion'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="pass" type="password" class="form-control" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-50 me-2">Ingresar</button>
                        <a href="<?= base_url('/'); ?>" class="btn btn-secondary w-50">Cancelar</a>
                    </div>
                    <div class="mt-3 text-center">
                        <span>¿Aún no se ha registrado? <a href="<?= base_url('/usuario_controller/registro'); ?>">Regístrese aquí</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
