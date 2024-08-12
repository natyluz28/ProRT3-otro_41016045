<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <style>
        body {
            background-color: #f0f2f5;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .alert {
            margin-bottom: 15px;
        }
        .welcome-text-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .welcome-text-box h2 {
            color: #343a40;
        }
        .welcome-text-box ul {
            list-style: none;
            padding: 0;
        }
        .welcome-text-box ul li {
            margin-bottom: 10px;
        }
        .user-icon {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-text-box p-4">
                    <h2>¡Bienvenido al Registro de Patitas Salvajes! 🐾</h2>
                    <p>Nos alegra que quieras ser parte de nuestra comunidad dedicada al bienestar de las mascotas.</p>
                    <h3>Beneficios de ser parte de nuestra comunidad:</h3>
                    <ul>
                        <li><strong>Acceso a Recursos:</strong> Información útil sobre cuidados y salud de mascotas.</li>
                        <li><strong>Comunidad Activa:</strong> Conecta con otros amantes de los animales.</li>
                        <li><strong>Eventos Exclusivos:</strong> Participa en eventos y actividades para mascotas.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-container p-4">
                    <?php $validation = \Config\Services::validation(); ?>

                    <form id="registerForm" method="post" action="<?= base_url('/enviar-form'); ?>"> 
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>
                        <div class="text-center mb-4">
                            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="User Icon" class="user-icon">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= old('nombre') ?>">
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('nombre'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= old('apellido') ?>">
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('apellido'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?= old('usuario') ?>">
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('usuario'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@algo.com" value="<?= old('email') ?>">
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('email'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña (mínimo 5 caracteres)">
                            <?php if ($validation->getError('pass')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('pass'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">Acepto los <a href="<?= base_url('terminos'); ?>" target="_blank">Términos y Condiciones</a></label>
                        </div>
                        <div id="termsError" class="alert alert-danger d-none">Debes aceptar los términos para registrarte.</div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-2">Registrar</button>
                            <a href="<?= base_url('principal') ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript para validar el formulario -->
<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    var termsCheck = document.getElementById('termsCheck');
    var termsError = document.getElementById('termsError');
    if (!termsCheck.checked) {
        event.preventDefault(); // Evita que el formulario se envíe
        termsError.classList.remove('d-none'); // Muestra el mensaje de error
    }
});
</script>

<!-- Incluye aquí los archivos JS de Bootstrap u otros scripts necesarios -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
