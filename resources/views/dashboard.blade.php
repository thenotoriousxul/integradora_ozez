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
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link text-white">
                            Cerrar Sesión
                        </a>
                    </form>
                </li>
            </ul>
        </div>

        <div class="p-4 flex-grow-1">
            @yield('contenido')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
