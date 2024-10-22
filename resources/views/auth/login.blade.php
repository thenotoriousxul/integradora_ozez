<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .seccion-formulario a:hover {
            color: #0056b3;
            text-decoration: underline;
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
            transition: background-color 0.3s ease;
        }

        .seccion-formulario button:hover {
            background-color: #555;
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
            transition: background-color 0.3s ease;
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

        .links-extra {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .links-extra a {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f0f4f8;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .links-extra a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <div class="seccion-formulario">
        <img src="{{ asset('img/ozeztrc.png') }}" alt="Logo de la empresa">

        <h2>Inicia sesión en tu cuenta</h2>

        <!-- Alerta de error -->
        @if ($errors->any())
            <div id="alert" class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                <span class="font-medium">Error:</span> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" id="email" placeholder="Correo electrónico" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <div class="mensaje-error" id="error-password"></div>
            <button class="iniciodesesion" type="submit">Iniciar sesión</button>
        </form>

        <div class="links-extra">
            <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate aquí</a>
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña? Restablécela aquí</a>
        </div>
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
