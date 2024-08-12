<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Incluir el encabezado -->
    <?php include 'app/Views/front/head_view.php'; ?>
</head>
<body>

    <!-- Incluir la barra de navegación -->
    <?php include 'app/Views/front/navbar_view.php'; ?>

    <!-- Header -->
    <header class="text-center my-5">
        <h1>Bienvenido a nuestra Organización: Patitas Salvajes</h1>
        <img src="https://as2.ftcdn.net/v2/jpg/02/12/28/43/1000_F_212284373_sDJeeTxgYF52Af8rmITIpGsJH3t92Z3l.jpg" alt="Imagen de bienvenida" class="img-fluid">
        <h2>¡Ven y adopta un gato o un perro para tu hijo!</h2>
    </header>

    <!-- Galería -->
    <section class="galeria container my-5">
        <h1 class="text-center">Galería: Familias formadas</h1>
        <h2 class="text-center">Algunos de nuestros mayores logros, estos pequeños perdidos pudieron conseguir una casa amorosa a través de nuestros servicios</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="foto">
                    <img src="https://s-i.huffpost.com/gen/3269840/images/o-CHILD-CAT-DOG-facebook.jpg" alt="María con Copito y Rubio" class="img-fluid">
                    <div class="pie">
                        <p>María con Copito y Rubio</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="foto">
                    <img src="https://cdn.redcanina.es/wp-content/uploads/2019/04/29180857/nino-pasea-perro.jpg" alt="Julio con Valentín" class="img-fluid">
                    <div class="pie">
                        <p>Julio con Valentín</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="foto">
                    <img src="https://www.mascotalia.es/wp-content/uploads/2014/07/razas-gatos-ni%C3%B1os.jpg" alt="Luis con 'Tin Tin'" class="img-fluid">
                    <div class="pie">
                        <p>Luis con "Tin Tin"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'app/Views/front/footer_view.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
