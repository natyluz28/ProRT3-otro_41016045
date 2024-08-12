<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Patitas Salvajes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-mQ93LRK2ErNgN5t/9wE4dO1l46T/RKAEbTzpIuSBs5VjFhUybzKv8fMEe0fWlZHm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('public/styles/styles_registro.css'); ?>">

    <!-- Font Awesome for Icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registro de Usuario</h2>

        <!-- Mensajes de Error y Éxito -->
        <?php if (!empty(session()->getFlashdata('fail'))): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('fail'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <?php if (!empty(session()->getFlashdata('success'))): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Formulario de Registro -->
        <form method="post" action="<?= base_url('/backend/enviar-registro') ?>">
            <?= csrf_field(); ?>
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?= old('nombre') ?>" required>
                <?php if ($validation->getError('nombre')): ?>
                    <div class="text-danger mt-2">
                        <?= $validation->getError('nombre'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" value="<?= old('apellido') ?>" required>
                <?php if ($validation->getError('apellido')): ?>
                    <div class="text-danger mt-2">
                        <?= $validation->getError('apellido'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= old('email') ?>" required>
                <?php if ($validation->getError('email')): ?>
                    <div class="text-danger mt-2">
                        <?= $validation->getError('email'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario" value="<?= old('usuario') ?>" required>
                <?php if ($validation->getError('usuario')): ?>
                    <div class="text-danger mt-2">
                        <?= $validation->getError('usuario'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="pass" placeholder="Contraseña" required>
                <?php if ($validation->getError('pass')): ?>
                    <div class="text-danger mt-2">
                        <?= $validation->getError('pass'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-success">Registrarse</button>
            <a href="<?= base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
        </form>
    </div>

    <!-- Footer -->
    <?php include 'app/Views/front/footer_view.php'; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qYqmpTc4yWxZPdrTc1Y7WJW1l5TQeRxKIM2NGGJKcJoRoVhb1Gf6N3c2MJ37qpmR" crossorigin="anonymous"></script>
</body>
</html>
