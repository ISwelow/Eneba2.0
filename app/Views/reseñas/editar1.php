<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9"></div>
            <h2>Editar Reseña</h2>
            <form action="<?= base_url('index.php/reseñas/update1'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idResena" value="<?= $resenas->idResena ?>">
                
                <div class="calificacion"><label for="" class="form-label">calificacion</label>
                <input type="number" class="form-control" name ="calificacion" id="calificacion" value="<?= $resenas->calificacion ?>">
                </div>

                <div class="mb-3">
                <label for="pais">País</label>
                <select name="pais" id="pais" class="form-control">
                    <?php if($resenas->pais == "Mexico"): ?>
                    <option value="Mexico" selected>México</option>
                    <option value="Espana" >España</option>
                    <option value="Colombia" >Colombia</option>
                    <option value="Venezuela" >Venezuela</option>
                    <?php elseif($resenas->pais == "Espana"): ?>
                    <option value="Mexico">México</option>
                    <option value="Espana" selected>España</option>
                    <option value="Colombia" >Colombia</option>
                    <option value="Venezuela" >Venezuela</option>
                    <?php elseif($resenas->pais == "Colombia"): ?>
                    <option value="Mexico">México</option>
                    <option value="Espana" >España</option>
                    <option value="Colombia" selected>Colombia</option>
                    <option value="Venezuela" >Venezuela</option>
                    <?php elseif($resenas->pais == "Venezuela"): ?>
                    <option value="Mexico">México</option>
                    <option value="Espana" >España</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Venezuela" selected>Venezuela</option>
                    <?php else: ?>
                    <option value="Mexico">México</option>
                    <option value="Espana" >España</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Venezuela">Venezuela</option>
                    <?php endif ?>

                </div> 
                <div class="fecha_creacion"><label for="" class="form-label">Fecha de creación</label>
                <input type="date" class="form-control" name ="fecha_creacion" id="fecha_creacion" value="<?= $resenas->fecha_creacion ?>">
                </div>

                <div class="comentario"><label for="" class="form-label">Comentario</label>
                <input type="text" class="form-control" name ="comentario" id="comentario" value="<?= $resenas->comentario ?>">
                </div>

      

                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
