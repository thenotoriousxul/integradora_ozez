<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="preload" href="{{ asset('img/iniciobynimg.jpeg') }}" as="image">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha384-4n4n6pZn3b9Q8sX8MDZf4ExsU5Vy1HdNeNe8hFcDzOUdKnGq07MI6+NnWbH/zZik" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body, main, .imginicio, .catalogo-gallery, .product-gallery, .personalizacion, .nosotros {
            margin: 0; 
            padding: 0; 
            font-family: 'Bebas Neue', cursive;
            overflow-x: hidden;
            height: 100%; 
        }

        .imginicio {
            width: 100%;
            height: 100vh;
        }
        .imginicio img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .animacion {
            position: relative;
            background-color: black;
            color: white;
            font-size: 5em;
            white-space: nowrap;
            overflow: hidden;
            height: 100px;
        }
        .animacion h1 {
            display: inline-block;
            animation: slide 10s linear infinite;
            margin: 0;
        }

        @keyframes slide {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .catalogo-gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('{{ asset('img/inicio2.jpeg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            height: 300px;
        }
        .catalogo-gallery .overlay {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .product-gallery {
            display: flex;
            justify-content: space-around;
            background-color: black;
            padding: 20px;
        }
        .product-item {
            text-align: center;
            color: white;
            flex-basis: 23%;
        }
        .product-item img {
            width: 100%;
            transition: transform 0.3s ease;
        }
        .product-item:hover img {
            transform: scale(1.05);
        }
        .product-item p {
            margin-top: 10px;
            font-size: 24px;
        }

        .personalizacion {
            position: relative;
            text-align: center;
            margin: 0;
        }
        .personalizacion img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .personalizacion .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .personalizacion h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .personalizacion p {
            font-size: 2em;
            margin-bottom: 15px;
        }
        .personalizacion button, button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .personalizacion button:hover, button:hover {
            background-color: #444;
        }

        .nosotros {
    position: relative;
    background-image: url('{{ asset('img/varios.jpeg') }}');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 60px 20px;
    text-align: center;
    min-height: 800px; 
    margin: 0; 
    display: flex; 
    align-items: center;
    justify-content: center;
}

.nosotros .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px; 
}
.nosotros h2 {
    font-size: 3em;
    margin-bottom: 20px;
}
.nosotros p {
    font-size: 1.5em; 
    margin-bottom: 15px;
    max-width: 500px; 
}
.nosotros img.logo {
    width: 120px; 
    height: 120px;
    margin: 20px auto 0;
    display: block;
}

    </style>
</head>
<body>
    @include('partials.nav')

    <main>
        <div id="inicio" class="imginicio">
            <img class="main" src="{{ asset('img/inicioimg.jpeg') }}" alt="Imagen de inicio de Ozez">
        </div>

        <div class="animacion">
            <h1>El estilo salvaje ha llegado, ¿estás listo para destacar? Consíguelo aquí.</h1>
        </div>

        <div id="catalogo" class="catalogo-gallery">
            <div class="overlay">
                <h1>CATÁLOGO DE PLAYERAS</h1>
                <p style="font-size: 24px;">Explora nuestra selección de playeras y encuentra la que más te gusta.</p>
                <button onclick="location.href='{{ url('products') }}'">Ir al Catálogo</button>
            </div>
        </div>

        <div class="product-gallery">
            <div class="product-item">
                <img src="{{ asset('img/first.jpeg') }}" alt="Playera 1 - Estilo único">
                <p>¡Resalta tu estilo con nuestras playeras exclusivas!</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/second.jpeg') }}" alt="Playera 2 - Diseño original">
                <p>Combina autenticidad y comodidad con cada diseño.</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/third.jpeg') }}" alt="Playera 3 - Inspiración en cada detalle">
                <p>Encuentra la inspiración en cada detalle de nuestras playeras.</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/fourth.jpeg') }}" alt="Playera 4 - Marca la diferencia">
                <p>¡Elige el modelo que habla de ti y marca la diferencia!</p>
            </div>
        </div>

        <div id="personalizacion" class="personalizacion">
            <img src="{{ asset('img/personalizacion2.jpeg') }}" alt="Personalización de productos">
            <div class="overlay">
                <h2>Personaliza tu Estilo</h2>
                <p>¡Haz tu playera única y personal con nosotros!</p>
                <button onclick="location.href='{{ url('customize') }}'">Personalizar Ahora</button>
            </div>
        </div>

        <div id="nosotros" class="nosotros">
            <div class="overlay">
                <h2>Sobre Nosotros</h2>
                <p>Raymundo y Domingo, dos amigos apasionados por la moda, soñaban con crear su propia marca. <br> En una tarde soleada, decidieron dar el salto y fundaron Ozez. Con pocos ahorros, diseñaron camisetas. <br> Después de varias noches de trabajo, lograron lanzar su primera colección. La respuesta fue abrumadora. La comunidad apoyó su visión. <br> Ahora, Ozez representa un estilo auténtico y responsable. Cada prenda cuenta una historia de amistad y pasión por la moda.</p>
                <img class="logo" src="{{ asset('img/ozeztrc.png') }}" alt="Logo de Ozez">
            </div>
        </div>
    </main>
        @include('partials.footer')
        <script>
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
