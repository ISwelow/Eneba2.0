<!DOCTYPE html>
<html>
<head>
    <title>Veterinaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #f7e1c1, #f0d6ab);
        }

        .container {
            width: 80%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px #000000;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-between;
        }

        .left-column {
            flex: 1;
            text-align: left;
            padding-right: 20px;
        }

        .right-column {
            flex: 1;
            text-align: center;
        }

        h2 {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="left-column">
            <!-- Contenido a la izquierda -->
            <h2>BINVENIDO MASTER</h2>
            <p>Todos fallamos, todos cometemos errores, eso nos hace humanos.</p>
            <p>- John 117</p>
        </div>

    <div class="container">
    <div class="right-column">
        <div class="row">
            <div class="col-8">
                <form action="<?= base_url('Juegos/insert'); ?>" method="POST">
                    <?= csrf_field() ?>

                    <h2>Agregar Juego</h2>

            <div class="form-group">
                <label for="imagen">Adjuntar link de Imagen:</label>
                <input type="url" name="imagen" class="form-control" accept="image/*">
            </div>


            <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion">
                    </div>

                    <div class="form-group">
                        <label for="plataforma">Plataforma</label>
                        <select name="plataforma" id="plataforma" class="form-control">
                            <option value="Xbox">Xbox</option>
                            <option value="Play">Play Station</option>
                            <option value="PC">PC Gamer</option>
                            <option value="Nintendo">Nintendo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="Accion">Acción</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Arcade">Arcade</option>
                            <option value="Deportivo">Deportivo</option>
                            <option value="Estrategia">Estrategia</option>
                            <option value="Simulacion">Simulación</option>
                            <option value="Musicales">Musicales</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="desarrollador" class="form-label">Desarrollador</label>
                        <input type="text" class="form-control" name="desarrollador" id="desarrollador">
                    </div>


                    <div class="form-group">
                        <label for="editor" class="form-label">Editor</label>
                        <input type="text" class="form-control" name="editor" id="editor">
                    </div>

                    <div class="form-group">
                        <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
                        <input type="date" class="form-control" name="fecha_lanzamiento" id="fecha_lanzamiento">
                    </div>

                    <div class="form-group">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        </div>
    </div>
</body>
</html>
