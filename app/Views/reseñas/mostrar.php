<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #f7e1c1, #f0d6ab);
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
    </style>
</head>
<body>
    <div class="container">
    <h1>
                <img class="title-icon" src="https://i.pinimg.com/originals/66/36/d3/6636d37ba22a391c6353b1436a81f656.gif" alt="Icono" width="40" height="40" >Reseñas</h1>
                <table class="table">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Calificación</th>
                            <th>Pais</th>
                            <th>fecha creación</th>
                            <th>Comentario</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resenas as $Resenas): ?>
                            <tr>
                                <td><?= $Resenas->calificacion ?></td>
                                <td><?= $Resenas->pais ?></td>
                                <td><?= $Resenas->fecha_creacion ?></td>
                                <td><?= $Resenas->comentario ?></td>
                                <td class="actions">
                                    <a href="<?= base_url('index.php/reseñas/deleted/'.$Resenas->idResena); ?>">Eliminar</a>
                                    <a href="<?= base_url('index.php/reseñas/editar/'.$Resenas->idResena); ?>">Editar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
