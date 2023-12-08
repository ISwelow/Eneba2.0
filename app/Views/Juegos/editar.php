<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9"></div>
            <h2>Editar Juego</h2>
            <form action="<?= base_url('index.php/Juegos/update'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="imagen"><label for="" class="form-label">Imagen</label>
                <input type="url" class="form-control" name ="imagen" id="imagen" value="<?= $juegos->imagen ?>">
                </div>

            <input type="hidden" name="idJuego" value="<?= $juegos->idjuego ?>">
                <div class="nombre"><label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name ="nombre" id="nombre" value="<?= $juegos->nombre ?>">
                </div>

                <div class="descripcion"><label for="" class="form-label">Descripción</label>
                <input type="text" class="form-control" name ="descripcion" id="descripcion" value="<?= $juegos->descripcion ?>">
                </div> 

                <div class="mb-3">
                <label for="plataforma">Plataforma</label>
                <select name="plataforma" id="plataforma" class="form-control">
                    <?php if($juegos->plataforma == "Xbox"): ?>
                    <option value="Xbox" selected>XCHAD</option>
                    <option value="Play Station" >Play Station</option>
                    <option value="PC Gamer" >PCGOD</option>
                    <option value="Nintendo" >Nintendo</option>
                    <?php elseif($juegos->plataforma == "Play Station"): ?>
                    <option value="Xbox">XCHAD</option>
                    <option value="Play Station" selected>Play Station</option>
                    <option value="PC Gamer" >PCGOD</option>
                    <option value="Nintendo" >Nintendo</option>
                    <?php elseif($juegos->plataforma == "PC Gamer"): ?>
                    <option value="Xbox">XCHAD</option>
                    <option value="Play Station">Play Station</option>
                    <option value="PC Gamer" selected>PCGOD</option>
                    <option value="Nintendo" >Nintendo</option>
                    <?php elseif($juegos->plataforma == "Nintendo"): ?>
                    <option value="Xbox">XCHAD</option>
                    <option value="Play Station">Play Station</option>
                    <option value="PC Gamer" >PCGOD</option>
                    <option value="Nintendo"  selected>Nintendo</option>
                    <?php else: ?>
                    <option value="Xbox">XCHAD</option>
                    <option value="Play Station">Play Station</option>
                    <option value="PC Gamer">PCGOD</option>
                    <option value="Nintendo">Nintendo</option>  
                    <?php endif ?>
                </select>
                </div>

                <div class="mb-3">
                <label for="genero">Plataforma</label>
                <select name="genero" id="genero" class="form-control">
                <?php if($juegos->genero == "Accion"): ?>
                <option value="Accion" selected>Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica">Música</option>
                <?php elseif($juegos->genero == "Aventura"): ?>
                <option value="Accion">Acción</option>
                <option value="Aventura" selected>Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica">Música</option>
                <?php elseif($juegos->genero == "Arcade"): ?>
                <option value="Accion">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade"selected>Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica">Musica</option>
                <?php elseif($juegos->genero == "Deportivo"): ?>
                <option value="Accion">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo"selected>Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica">Música</option>
                <?php elseif($juegos->genero == "Estrategia"): ?>
                <option value="Accion">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia"selected>Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica">Música</option>
                <?php elseif($juegos->genero == "Simulacion"): ?>
                <option value="Accion">Accion</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion"selected>Simulación</option>
                <option value="Musica">Musica</option>
                <?php elseif($juegos->genero == "Musica"): ?>
                <option value="Accion">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica"selected>Música</option>
                <?php else: ?>
                <option value="Accion">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Arcade">Arcade</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Estrategia">Estrategia</option>
                <option value="Simulacion">Simulación</option>
                <option value="Musica"selected>Música</option>
                <?php endif ?>
                </select>
                </div>

                <div class="desarrollador"><label for="" class="form-label">Desarrollador</label>
                <input type="text" class="form-control" name ="desarrollador" id="desarrollador" value="<?= $juegos->desarrollador ?>">
                </div>

                
                <div class="editor"><label for="" class="form-label">Editor</label>
                <input type="text" class="form-control" name ="editor" id="editor" value="<?= $juegos->editor ?>">
                </div>

                </div> 
                <div class="fecha_lanzamiento"><label for="" class="form-label">Fecha de Lanzamiento</label>
                <input type="date" class="form-control" name ="fecha_lanzamiento" id="fecha_lanzamiento" value="<?= $juegos->fecha_lanzamiento ?>">
                </div>

                <div class="precio"><label for="" class="form-label">Precio</label>
                <input type="number" class="form-control" name ="precio" id="precio" value="<?= $juegos->precio ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        </div> 
    </div>
</div>
