
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/Juegos/buscar/'); ?>" method="GET">
              
            <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">

                <label for="genero">Genero</label>
                <select name="genero" class="form-control">
                    <option value=""></option>
                    <option value="accion">Acción</option>
                    <option value="aventura">Aventura</option>
                    <option value="arcade">Arcade</option>
                    <option value="deportivo">Deportivo</option>
                    <option value="estrategia">Estrategia</option>
                    <option value="simula">Simulación</option>
                    <option value="musica">Música</option>
                </select>
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($Juegos)){

    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Genero</th>
                </thead>
                <tbody>
                <?php foreach($Juegos as $Juego) : ?>
                    <tr>
                            <td> <img src='<?= $Juego->imagen ?>' alt="Imagen del juego" width="auto" height="100"> </td>
                            <td><?= $Juego->nombre ?></td>
                            <td><?= $Juego->genero ?></td>
                            <td><a href="<?= base_url('index.php/ventas/agregar/' . $Juego->idjuego); ?>" class="btn btn-primary">Comprar</a></td>
                        </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>