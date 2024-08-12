<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('public\styles\styles_logueando.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NZ:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header-container">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">
                        <img src="https://tse3.mm.bing.net/th?id=OIP.qCsxMRpVVt-A1nfRwtHVkAHaHW&pid=Api&P=0&h=180" alt="Logo Patitas Salvajes" class="logo">
                    </a>
                    <div class="title-container">
                        <h1>Patitas Salvajes</h1>
                        <h2>¡Nuestro refugio para animales!</h2>
                    </div>
                </div>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                </form>
                <div class="dropdown ms-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('login'); ?>">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('registro'); ?>">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
