<!DOCTYPE html>
<html>
<head>
    <title>Veterinaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px #000000;
            margin-top: 30px;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .table {
            width: 100%;
            margin-top: 20px;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table td.actions {
            text-align: center;
        }
        .show-more-button {
            padding: 15px 30px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            margin-left: 850px; /* Alinea el botón a la derecha con un margen de 20 píxeles */
            margin-top: 20px; /* Agregado un margen superior de 20 píxeles (ajustable según tus necesidades) */
}

    </style>
</head>
<body>
    
    <div class="container">

        <br>
        <a href="<?= base_url('index.php/Juegos/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
        </a>
        <br>
<a href="<?= base_url('index.php/reseñas/agregar1'); ?>" class="show-more-button">Agregar Reseña</a>
<br>

        <div class="row">
            <div class="col-12">
                <h2>
                <img class="title-icon" src="https://i.pinimg.com/originals/66/36/d3/6636d37ba22a391c6353b1436a81f656.gif" alt="Icono" width="40" height="40" >Reseñas</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Calificación</th>
                            <th>Pais</th>
                            <th>fecha creación</th>
                            <th>Comentario</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resenas as $Resenas): ?>
                            <tr>
                                <td><?= $Resenas->nombre ?></td>
                                <td><?= $Resenas->calificacion ?></td>
                                <td><?= $Resenas->pais ?></td>
                                <td><?= $Resenas->fecha_creacion ?></td>
                                <td><?= $Resenas->comentario ?></td>
                             
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>


