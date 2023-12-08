<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .floating-gif {
        position: fixed;
        width: 80px;
        height: 80px;
        z-index: 9999;
        animation: moveDiagonally 8s infinite linear;
    }

    @keyframes moveDiagonally {
        0% {
            transform: translate(0, 0);
        }
        25% {
            transform: translate(calc(100vw - 80px), calc(100vh - 80px));
        }
        15% {
            transform: translate(0, calc(100vh - 80px));
        }
        20% {
            transform: translate(calc(100vw - 80px), 0);
        }
        15% {
            transform: translate(0, 0);
        }
    }
    

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px; /* Limitar el ancho del formulario para una mejor legibilidad */
            margin: 0 auto; /* Centrar el formulario horizontalmente */
        }

        label {
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="container">
    <img class="floating-gif" src="https://i.pinimg.com/originals/66/36/d3/6636d37ba22a391c6353b1436a81f656.gif" alt="Icono" width="40" height="40" >
                <table class="table">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="login-container">
                    <form action="<?= base_url('usuario/login'); ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nunca compartas tú correo con nadie</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="tipo">Y vos quien sos</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="Administrador">Administrador</option>
                                <option value="Usuario">Usuario</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>
