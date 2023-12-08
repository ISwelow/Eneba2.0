<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <style>

body {
    font-family: 'Courier New', Courier, monospace;
    text-align: center;
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg, #f7e1c1, #f0d6ab);
}

.header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.description {
    font-size: 18px;
    margin-bottom: 20px;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px;
}

.box {
    width: calc(30% - 20px);
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: center;
    box-sizing: border-box;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.box img {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    margin-bottom: 10px;
    /* Establecer un tamaño fijo para todas las imágenes */
    width: 220px;
    height: 260px;
}

.box-description {
    margin-top: 10px;
    font-size: 16px;
}

.show-more-button {
    padding: 15px 30px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    margin: 20px;
}

.show-more-button:hover {
    background-color: #555;
}




    </style>
</head>
<body>
    <div class="header">
        <h1>ENEBA 2.0</h1>
        <p class="description">Esta es la copia de la copia de la copia de otra página de juegos OwO.</p>
    </div>

    <div class="box-container">
        <?php foreach ($juegos as $Juego): ?>
            <div class="box">
                <a href="<?=base_url('index.php/Juegos/mostrar2/'. $Juego->idjuego);?>"><img src='<?= $Juego->imagen ?>' alt="Imagen del juego" width="auto" height="100"></a>
                <h2><?= $Juego->nombre ?></h2>
                <p class="box-description"><?= $Juego->genero ?></p>
                <p class="box-description"><?= $Juego->descripcion ?></p>
                <p class="box-description"><?= $Juego->plataforma ?></p>
                <p class="box-description"><?= $Juego->editor ?></p>
                <p class="box-description"><?= $Juego->precio ?></p>
                <p><a href="<?=base_url('index.php/Juegos/delete/'. $Juego->idjuego); ?>">Eliminar</a>
                <a href="<?=base_url('index.php/Juegos/editar/'. $Juego->idjuego); ?>">Editar</a></p>
                <div class="box-buttons">
                    
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <br>

    <a href="#" class="show-more-button">Mostrar Más</a>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</body>
</html>
