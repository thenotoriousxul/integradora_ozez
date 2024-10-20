<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f4f8;
        }

        .contenedor {
            display: flex;
            width: 100%;
            height: 100vh;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .seccion-formulario {
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .seccion-formulario img {
            width: 100px;
            margin: 0 auto 20px;
        }

        .seccion-formulario h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .seccion-formulario p {
            margin-bottom: 40px;
            font-size: 14px;
            color: #1f2937;
            text-align: center;
        }

        .seccion-formulario a {
            color: blue;
            text-decoration: none;
        }

        .seccion-formulario form {
            display: flex;
            flex-direction: column;
        }

        .seccion-formulario input {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .seccion-formulario button {
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .seccion-formulario button:hover {
            background-color: #333;
        }

        .seccion-formulario .inicio-sesion-social {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .seccion-formulario .inicio-sesion-social button {
            flex: 1;
            padding: 12px;
            margin-right: 10px;
            border: 1px solid #ccc;
            background-color: #333;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .seccion-formulario .inicio-sesion-social button:last-child {
            margin-right: 0;
        }

        .seccion-formulario .inicio-sesion-social i {
            margin-right: 8px;
            color: white;
        }

        .seccion-imagen {
            flex: 1;
            background-image: url('{{ asset('img/loginimg.jpeg') }}');
            background-size: contain;
            background-position: center;
        }

        .mensaje-error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <div class="seccion-formulario">
        <img src="{{asset('img/ozeztrc.png')}}" alt="Logo de la empresa">

        <h2>Inicia sesión en tu cuenta</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <div class="mensaje-error" id="error-password"></div>
            <button class="iniciodesesion" type="submit">Iniciar sesión</button>
        </form>
        <br>
        <strong>
            <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
        </strong>
    </div>
    <div class="seccion-imagen"></div>
</div>

<script>
    $(document).ready(function() {
        $('#password').on('input', function() {
            const password = $(this).val();
            if (password.length < 8) {
                $('#error-password').text('La contraseña debe tener al menos 8 caracteres.');
            } else {
                $('#error-password').text('');
            }
        });
    });
</script>

</body>
</html>
