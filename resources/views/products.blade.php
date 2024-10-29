<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0px;
    }
    .Estadopag {
    font-size: 50x;
    margin-bottom: 20px;
    }
    .Estadopag a {
    color: black;
    text-decoration: none;
    }
    .Estadopag a:hover {
    color: rgb(53, 81, 114);
    text-decoration: none;
    font-size: 20px;
    }

    .novedades {
    background-color: white;
    display: flex;
    font-size: 20px;
    justify-content: center;
    }

    .categories {
    display: flex;
    overflow-x: auto;
    margin-bottom: 30px;
    justify-content: center;
    }
    .category {
    white-space: nowrap;
    padding: 10px 15px;
    background-color: #f0f0f0;
    margin-right: 10px;
    border-radius: 5px;
    }

    .filtrado{
    display: flex;
    justify-content: flex-end;
    margin-right: 100px;
    }
    .filter-button {
    padding: 10px 15px;
    background-color: white;
    border: 1px solid black;
    border-radius: 5px;
    }
    .products {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    background-color: white;
    }
    .product {
    border: 1px solid #c6c6c6;
    padding: 10px;
    border-radius: 5px;
    }

    .product:hover {
    border: 1px solid #3f3c3c;
    padding: 10px;
    border-radius: 5px;
    }
    .product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
    }

    .product:hover img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
    background-image: image("img2.png");
    }

    .product-price {
    font-weight: bold;
    margin-bottom: 5px;
    }
    .product-name {
    font-size: 14px;
    margin-bottom: 5px;
    }
    .product-category {
    font-size: 12px;
    color: #666;
    }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha384-4n4n6pZn3b9Q8sX8MDZf4ExsU5Vy1HdNeNe8hFcDzOUdKnGq07MI6+NnWbH/zZik" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>
<body>

    @include('partials.navotro')

    <div class="Estadopag">
        <a  href="#">inicio</a> / <a href="#">Ropa</a> / <a href="#">Novedades</a> / <a href="#">Personalizacion</a>
    </div>

    <div class="novedades">
    <h1>ROPA · NOVEDADES · HOMBRE <span style="color: #666; font-size: 20px;">[203]</span></h1>
    </div>

    <div class="categories">
        <div class="category">Novedades</div>
        <div class="category">Ofertas</div>
        <div class="category">Edicion 1</div>
        <div class="category">Edicion 2</div>
        <div class="category">Personalizacion</div>
        <div class="category">Diseños</div>
    </div>
    
    <div class="filtrado">
    <button class="filter-button">FILTRAR Y ORDENAR</button>
    </div>
    <br>
    <div class="products">
        <div class="product">
            <img src="{{asset('/img/prueba5.png')}}" alt="Producto 1">
            <div class="product-price">$1,199</div>
            <div class="product-name">Playera Dia muertos</div>
            <div class="product-category">Diseño</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/imgExample1.jpg')}}" alt="Producto 2">
            <div class="product-price">$1,799</div>
            <div class="product-name">Shorts Spacer adidas Basketball (Unisex)</div>
            <div class="product-category">Basketball</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba4.png')}}" alt="Producto 3">
            <div class="product-price">$1,799</div>
            <div class="product-name">Shorts Spacer adidas Basketball (Unisex)</div>
            <div class="product-category">Basketball</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba2.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/product1.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba3.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba4.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba5.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/product1.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate3</div>
            <div class="product-category">Ultimate365</div>
        </div>
        <div class="product">
            <img src="{{asset('/img/prueba3.png')}}" alt="Producto 4">
            <div class="product-price">$1,399</div>
            <div class="product-name">Playera Polo Estampada de Malla Ultimate365</div>
            <div class="product-category">Ultimate365</div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>