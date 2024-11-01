<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%; 
            margin: 0; 
        }
        .sidebar {
            height: 100%; 
            position: sticky; 
        }
    </style>
</head>
<body>
    <div class="d-flex flex-row" style="height: 100%;">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar" style="width: 250px;">
            <span class="fs-5 fw-semibold">Mi perfil</span>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link text-white">
                            Cerrar Sesión
                        </a>
                    </form>
                </li>
            </ul>
        </div>