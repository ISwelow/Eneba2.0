<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Historial Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Minecraftia', sans-serif;
        }

        .container {
            margin-top: 50px;
            position: relative;
        }

        h1 {
            font-size: 2.5em;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: -60px;
        }

        .row {
            align-items: center;
        }

        .col-md-8 p {
            margin-top: 10px; 
        }

        .card {
            width: 200px; /* Ajusta el ancho según tu preferencia */
            height: 350px; /* Ajusta el alto según tu preferencia */
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
             top: 70%;
            left: 180%; /* Cambia esta propiedad para ajustar la posición horizontal */
            transform: translate(100%, -120%);
        }

        .card-body {
            padding: 20px;
        }

        .buy-button {
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <br>
        <a href="<?= base_url('index.php/Juegos/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
        </a>
        <h1 class="display-4 text-center mb-4">Comprar Juego</h1>

        <div class="row">
            <div class="col-md-4 text-center">
                <img src="<?= $juegos->imagen ?>" alt="Imagen del juego" width="250">
            </div>
            <div class="col-md-8">
                <p>Name Juego: <?= $juegos->nombre ?></p>
                <p>Plataforma: <?= $juegos->plataforma ?></p>
                <p>Genero: <?= $juegos->genero ?></p>
                <p>Genero: <?= $juegos->editor ?></p>
                <p>Descripción: <?= $juegos->descripcion ?></p>
                <p>Precio: <?= $juegos->precio ?></p>
                <p>Fecha de salida: <?= $juegos->fecha_lanzamiento ?></p>
            </div>

            <!-- Panel de Compra -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">¡Compra Ahora!</h5>
                        <p class="card-text">Agrega este increíble juego a tu colección.</p>
                        <p>Realice una transferencia bancaria a este número de cuenta 5512-3824-0672-5878</p>
                        <p>Una vez echo esto, regresa para proporcionarte un código.</p>
                        <div class="buy-button">
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
