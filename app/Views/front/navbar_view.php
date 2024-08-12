<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="https://static.vecteezy.com/system/resources/previews/006/018/558/original/black-cat-logo-simple-line-illustration-design-free-vector.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-top">
            INICIO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/quienes_somos'); ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/acerca_de'); ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/registro'); ?>">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/iniciar_sesion'); ?>">Iniciar sesión</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comunidad
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">FERIAS</a></li>
                        <li><a class="dropdown-item" href="#">ATENCIÓN PROFESIONAL</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="<?= base_url('/search'); ?>" method="get">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" name="query">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
