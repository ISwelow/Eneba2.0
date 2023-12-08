
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/Ventas/mostrar/'); ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">

       
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($Ventas)){

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
                <?php foreach($ventas as $Venta) : ?>
                    <tr>
                    <img src='<?= $Juego->imagen ?>' alt="Imagen del juego" width="auto" height="100">
                        <td><?=$Venta->nombre ?></td>
                        <td><?=$Venta->genero ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>