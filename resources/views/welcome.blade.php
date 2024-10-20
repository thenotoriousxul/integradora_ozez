<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="preload" href="{{asset('img/iniciobynimg.jpeg')}}" as="image">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Bebas Neue', cursive;
            background-color: #f5f5f5;
        }

        .imginicio {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .imginicio img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .imginicio .texto {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3em;
            text-align: center;
            z-index: 10;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .product-gallery {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 50px auto;
            flex-wrap: wrap;
        }

        .product-item {
            text-align: center;
            margin-bottom: 20px;
            flex-basis: 23%;
        }

        .product-item img {
            width: 100%;
            height: auto;
        }

        .product-item p {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .nosotros {
            background-color: black;
            color: white;
            padding: 40px 20px;
            text-align: center;
            font-size: 28px;
            line-height: 1.6;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .nosotros h2 {
            font-size: 3em;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .nosotros img.logo {
            width: 100px;
            height: 100px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .clientes {
            background-color: white;
            padding: 40px 20px;
        }

        @media (max-width: 768px) {
            .imginicio .texto {
                font-size: 1.5em;
            }

            .imginicio {
                font-size: 0.8em;
            }

            .product-gallery {
                flex-direction: column;
                align-items: center;
            }

            .product-item {
                flex-basis: 100%;
            }

            .nosotros h2 {
                font-size: 1.5em;
            }
        }

    </style>
</head>
<body>
<header>
    <nav>
        <!--@ include (partials.nav)-->
    </nav>
</header>
<main>
    <div class="imginicio">
        <div class="texto">
        </div>
        <img class="main" src="{{asset('img/iniciobynimg.jpeg')}}" alt="Imagen de inicio">
    </div>

    <div class="product-gallery">
        <div class="product-item">
            <img src="{{asset('img/first.jpeg')}}" alt="Accesorios 1">
            <p>¡Eleva tu look con los accesorios ideales!</p>
        </div>
        <div class="product-item">
            <img src="{{asset('img/second.jpeg')}}" alt="Accesorios 2">
            <p>Atrévete a combinar tu atuendo con los compañeros perfectos.</p>
        </div>
        <div class="product-item">
            <img src="{{asset('img/third.jpeg')}}" alt="Accesorios 3">
            <p>Brilla en donde estés con complementos que te harán destacar.</p>
        </div>
        <div class="product-item">
            <img src="{{asset('img/fourth.jpeg')}}" alt="Accesorios 4">
            <p>¡Elige los que hablen de ti y marca la diferencia!</p>
        </div>
    </div>

    <div class="nosotros">
        <h2>Sobre Nosotros</h2>
        Raymundo y Domingo, dos amigos apasionados por la moda, soñaban con crear su propia marca. <br> En una tarde soleada, decidieron dar el salto y fundaron Ozez. Con pocos ahorros, diseñaron camisetas y sudaderas sostenibles.<br>
        Después de varias noches de trabajo, se lanzaron a las redes sociales, compartiendo sus creaciones y su proceso.<br>
        La respuesta fue positiva, y pronto fueron invitados a una feria local de emprendedores.
        <br> Allí, su stand atrajo a muchos curiosos, y vendieron más de lo que esperaban. <br>
        Con el éxito de la feria, lanzaron su tienda en línea. <br>
        Ozez comenzó a crecer, convirtiéndose en un símbolo de estilo y sostenibilidad. <br>
        Raymundo y Domingo, con su esfuerzo y creatividad, demostraron que los sueños pueden hacerse realidad.
        <br>
        <img class="logo" src="{{asset('img/ozeztrc.png')}}" alt="Logo Ozez">
    </div>

    <div class="clientes">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Los clientes también compraron</h2>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <div class="grupo relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none grupo-hover:opacity-75 lg:h-80">
                    <img src="{{asset('img/frente1.jpeg')}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" alt="Camiseta básica negra">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Camiseta Básica
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Blanco</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>

            <div class="grupo relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none grupo-hover:opacity-75 lg:h-80">
                    <img src="{{asset('img/frente2.jpeg')}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" alt="Camiseta básica blanca">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Camiseta Básica
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Blanco</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>

            <div class="grupo relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none grupo-hover:opacity-75 lg:h-80">
                    <img src="{{asset('img/frente3.jpeg')}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" alt="Camiseta básica azul">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Camiseta Básica
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Blanco</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>

            <div class="grupo relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none grupo-hover:opacity-75 lg:h-80">
                    <img src="{{asset('img/frente4.jpeg')}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" alt="Camiseta básica roja">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Camiseta Básica
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Blanco</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
