<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>eneba2.0</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
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

        .message {
            float: left;
        }

        .flag {
            float: right;
            margin-top: 10px;
            margin-right: 20px;
        }

        .text-box {
            margin-top: 20px;
        }

        .icon {
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin: 10px;
        }

        .button:hover {
            background-color: #555;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .yellow-button {
            padding: 10px 20px;
            background-color: yellow;
            color: #333;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin: 10px;
        }

        .yellow-button:hover {
            background-color: #ffdb58;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>ENEBA 2.0</h1>
        <p class="description">Eneba2.0 es una página web que tiene de todos los juegos.</p>
    </div>
    <div class="message">
        <p>HOLA DE NUEVO MASTER</p>
    </div>
    <div class="flag">
        <img src="bandera_mexico.png" alt="Bandera de México" width="50">
    </div>
    <div class="text-box">
        <input type="text" placeholder="Escribe aquí">
        <img src="icono.png" alt="Icono">
    </div>
    <div class="button-container">
        <a href="#" class="button">Agregar Juegos</a>
        <a href="#" class="button">Agregar Categorías</a>
        <a href="#" class="button">Agregar Reseña</a>
    </div>
    <div class="table-container">
        <h2>Agregar Juegos</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plataforma</th>
                    <th>Género</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" minlength="5" placeholder="Nombre" required></td>
                    <td><input type="text" placeholder="Plataforma" required></td>
                    <td><input type="text" placeholder="Género" required></td>
                    <td><input type="text" placeholder="Precio" required></td>
                    <td><input type="text" placeholder="Descripción" required></td>

                </tr>
            </tbody>
        </table>
        <button class="yellow-button">Agregar</button>
    </div>
</body>
</html>
