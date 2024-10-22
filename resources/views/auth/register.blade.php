<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuenta</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
            background-color: #555;
        }

        .seccion-formulario p {
            margin-top: 20px;
            text-align: center;
            color: #1f2937;
        }

        .seccion-formulario a {
            color: blue;
            text-decoration: none;
        }

        .seccion-imagen {
            flex: 1;
            background-image: url('{{ asset('img/colorplayera.jpeg') }}');
            background-size: cover;
            background-position: center;
        }

        .mensaje-error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
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
    </style>
</head>
<body>

<div class="contenedor">
    <div class="seccion-formulario">
        <img src="{{ asset('img/ozeztrc.png') }}" alt="Logo de la empresa">
        <h2>Crea tu cuenta</h2>

        <div id="alert" class="hidden bg-red-500 text-white p-4 mb-4 rounded" role="alert"></div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nombre completo" value="{{ old('name') }}" required autofocus>
            <div class="mensaje-error" id="error-name"></div>
            <input type="email" name="email" id="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" required>
            <div class="mensaje-error" id="error-password"></div>

            <button class="iniciodesesion" type="submit">Registrarse</button>
        </form>

        <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
    </div>
    <div class="seccion-imagen"></div>
</div>

<script>
    $(document).ready(function() {
        // Validación de la contraseña
        $('#password, #password_confirmation').on('input', function() {
            validarContrasena();
        });

        function validarContrasena() {
            const password = $('#password').val();
            const confirmPassword = $('#password_confirmation').val();
            const hasUpperCase = /[A-Z]/.test(password);
            const hasLowerCase = /[a-z]/.test(password);
            const hasNumber = /\d/.test(password);
            const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

            let errorMessage = '';

            if (password.length < 8) {
                errorMessage = 'La contraseña debe tener al menos 8 caracteres.';
            } else if (!hasUpperCase) {
                errorMessage = 'La contraseña debe contener al menos una letra mayúscula.';
            } else if (!hasLowerCase) {
                errorMessage = 'La contraseña debe contener al menos una letra minúscula.';
            } else if (!hasNumber) {
                errorMessage = 'La contraseña debe contener al menos un número.';
            } else if (!hasSpecialChar) {
                errorMessage = 'La contraseña debe contener al menos un carácter especial.';
            }

            if (password !== confirmPassword) {
                errorMessage = 'Las contraseñas no coinciden.';
            }

            $('#error-password').text(errorMessage);
        }

        $('#name').on('input', function() {
            const name = $(this).val();
            const hasNumber = /\d/.test(name);
            if (hasNumber) {
                $('#error-name').text('El nombre no debe contener números.');
            } else {
                $('#error-name').text('');
            }
        });

        @if ($errors->any())
        $('#alert').text('{{ $errors->first() }}').removeClass('hidden');
        @endif
    });
</script>

</body>
</html>
