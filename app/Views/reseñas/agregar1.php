<!DOCTYPE html>
<html>
<head>
    <title>Veterinaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .show-more-button:hover {
    background-color: #555;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="<?= base_url('reseñas/insert1'); ?>" method="POST">
                    <?= csrf_field() ?>

                    <h2>Agregar Reseña</h2>

                    <div class="form-group">
                        <label for="nombre">Juego</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="calificacion">Calificación</label>
                        <input type="number" class="form-control" name="calificacion" id="calificacion" min="1" max="5">
                    </div>

                    <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" name="pais" id="pais">
                    </div>

                    <div class="form-group">
                        <label for="fecha_creacion">Fecha de Creación</label>
                        <input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion">
                    </div>

                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>

                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
