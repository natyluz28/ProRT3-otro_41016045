<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <!-- Incluye aquí los archivos CSS de Bootstrap u otros estilos necesarios -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('styles/styles_panel.css') ?>"> <!-- Enlace al archivo CSS personalizado -->
    <style>
        .table-bordered {
            border: 1px solid #dee2e6;
            border-radius: 10px;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead th {
            border-bottom-width: 2px;
        }
        .custom-title {
            color: #343a40; /* Color oscuro para mejor contraste */
        }
        .session-message {
            color: #ffffff;
            background-color: #007bff; /* Color de fondo para destacar el mensaje */
            padding: 10px;
            border-radius: 5px;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <?php if(session()->perfil_id == 1): ?>
                    <h1 class="session-message">¡Has iniciado sesión como Mapacheadmin!</h1>
                <?php elseif(session()->perfil_id == 2): ?>
                    <h1 class="session-message">¡Has iniciado sesión como Usuario!</h1>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
                <?php 
                $imgSrc = session()->perfil_id == 1 ? 'mapacheadmin.jpg' : 'mapacheusuario.jpg'; 
                ?>
                <img class="img-fluid" src="<?= base_url('assets/img/' . $imgSrc); ?>" alt="Mapache">
            </div>
            <div class="col-12 col-md-8">
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <?php if(session()->perfil_id == 1): ?>
                    <div>
                        <!-- Título de la tabla -->
                        <h2 class="text-center custom-title">Usuarios Registrados</h2>
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($usuarios) && is_array($usuarios)): ?>
                                        <?php foreach($usuarios as $usuario): ?>
                                            <tr>
                                                <td><?= esc($usuario['nombre']); ?></td>
                                                <td><?= esc($usuario['apellido']); ?></td>
                                                <td><?= esc($usuario['email']); ?></td>
                                                <td>
                                                    <a href="<?= base_url('usuario/edit/'.$usuario['id_usuario']); ?>" class="btn btn-warning btn-sm">Editar</a>
                                                    <a href="<?= base_url('usuario/delete/'.$usuario['id_usuario']); ?>" class="btn btn-danger btn-sm">Borrar</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="text-center">No hay usuarios disponibles</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Botón para agregar nuevo usuario -->
                        <div class="mt-3 text-center">
                            <a href="<?= base_url('usuario/new'); ?>" class="btn btn-primary">Agregar Nuevo Usuario</a>
                        </div>
                    </div>
                <?php elseif(session()->perfil_id == 2): ?>
                    <!-- Contenido específico para el perfil_id 2 -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Incluye aquí los archivos JS de Bootstrap u otros scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
