<!DOCTYPE html>
<html>
<head>
    <title>Vista de Historial Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <a href="<?= base_url('index.php/Ventas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
        </a>
        <h1 class="display-4 text-center mb-4">Comprar Juego</h1>

        <div class="row">
            <div class="col-md-4 text-center-center">
                <!-- Utiliza el operador de fusión de null para acceder a la propiedad 'imagen' si existe -->
            <img src="<?= $ventas->imagen ?>" alt="Imagen del game" width="300" height="400">

            </div>
            <div class="col-md-8">
                <p>Name Juego: <?= $ventas->nombre ?></p>
                <p>Descripción: <?= $ventas->descripcion ?></p>
                <p>Precio: <?= $ventas->precio ?></p>
                <p>Fecha de compra: <?= $ventas->fecha_lanzamiento ?></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
