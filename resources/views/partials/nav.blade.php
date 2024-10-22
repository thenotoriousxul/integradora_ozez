<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        nav {
            display: none;
        }

        @media (min-width: 768px) {
            nav {
                display: flex;
            }

            nav a {
                color: #fff;
                text-decoration: none;
                margin: 0 12px;
                font-size: 24px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #82afc7;
            }
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header {
            background-color: #000;
            padding: 15px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left, .header-right {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
<header>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <div class="container">
        <div class="header-left">
            <h1>OZEZ</h1>
        </div>
        <nav>
            <a href="#">LANZAMIENTOS</a>
            <a href="#">MEN'S</a>
            <a href="#">WOMEN'S</a>
            <a href="#">Ofertas</a>
            <a href="#">Personalizacion</a>
        </nav>
        <div class="header-right">
        </div>
    </div>
</header>
</body>
</html>
