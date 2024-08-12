<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Patitas Salvajes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NZ:wght@300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('public/styles/styles_quienes_somos.css'); ?>">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header class="mb-4">
        <img src="https://media.istockphoto.com/photos/dogs-and-cats-peeking-over-web-banner-picture-id930281684?k=6&m=930281684&s=170667a&w=0&h=XCSh-el6G1-E242Va28BHSbzrzxLF1mm2nYmEymhsoY=" alt="Imagen de encabezado" class="img-fluid w-100">
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="texto mb-5">
            <p>Patitas Salvajes es una organización sin fines de lucro dedicada al cuidado y protección de gatos y perros sin hogar, con el objetivo de encontrarles un hogar amoroso y permanente. Fundada por la talentosa cantante y activista Taylor Swift, esta organización se enfoca en la adopción responsable, especialmente por parte de familias con niños, promoviendo el bienestar de los animales y la felicidad de las familias.</p>
            <p>Patitas Salvajes cuenta con un equipo de veterinarios voluntarios que ofrecen su tiempo y conocimientos para garantizar que todos los animales reciban la atención médica necesaria. Desde vacunas y chequeos regulares hasta tratamientos más complejos, estos profesionales se aseguran de que cada gato y perro esté en las mejores condiciones de salud antes de ser adoptado.</p>
            <p>El reconocido actor Leonardo DiCaprio es el principal donante de la organización, aportando generosamente para apoyar los diversos programas y necesidades operativas de Patitas Salvajes. Su compromiso y contribuciones han sido esenciales para la expansión y éxito continuo de la organización, permitiendo que cada vez más animales encuentren un hogar cariñoso.</p>
        </div>

        <!-- Cards Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://perrhijos.com.mx/wp-content/uploads/2021/08/IMG_3254.png" class="card-img-top" alt="Leonardo DiCaprio">
                    <div class="card-body">
                        <h5 class="card-title">Leonardo DiCaprio</h5>
                        <p class="card-text">El actor y productor conocido por su compromiso con la protección del medio ambiente y la conservación de la fauna, es uno de nuestros principales donantes, siendo quien hizo posible la construcción de la sede central en Buenos Aires, Argentina.</p>
                        <a href="#" class="btn btn-primary">+Inf.</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.farandulista.com/wp-content/uploads/2023/12/taylor-swift-persona-del-ano-2023.jpg" class="card-img-top" alt="Taylor Swift">
                    <div class="card-body">
                        <h5 class="card-title">Taylor Swift</h5>
                        <p class="card-text">Es la fundadora de esta organización quien, como artista, ha demostrado su compromiso con la protección del medio ambiente y de la fauna. En este caso, llegó a nuestro país para fundar esta organización protectora de gatos y perros.</p>
                        <a href="#" class="btn btn-primary">+Inf.</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://conociendoamiperro.com/wp-content/uploads/2018/10/veterinarians-poses-with-cats-veterinary-clinic-PJEKH3X.jpg" class="card-img-top" alt="Veterinarios">
                    <div class="card-body">
                        <h5 class="card-title">Veterinarios</h5>
                        <p class="card-text">Los veterinarios que trabajan de forma gratuita para cuidar y salvar a gatos y perros de la calle son verdaderos héroes de la comunidad. Junto a Taylor Swift, son los pilares de esta organización.</p>
                        <a href="#" class="btn btn-primary">+Inf.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Footer -->
   <?php include 'app/Views/front/footer_view.php'; ?>
   
</body>
</html>
