<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
    <script src="{{ asset('js/cart.js') }}" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    color: #333;
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

h1 {
    font-family: 'Bebas Neue', cursive;
    font-size: 36px;
    margin: 0 0 0 15px;
    color: #fff;
    letter-spacing: 2px;
}

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
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #82afc7;
    }
}

.icon-button {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #fff;
}

.cart {
    position: relative;
}

.cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #574e4e;
    color: #cb2626;
    font-size: 12px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

main {
    padding: 30px 0;
}

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

h2 {
    font-family: 'Bebas Neue', cursive;
    font-size: 48px;
    margin: 0;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.back-link {
    color: #1b5a39;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s;
}

.back-link:hover {
    color: #ff4757;
}

.cart-content {
    background-color: #fff;
    border-radius: 8px;
    padding: 25px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    text-align: left;
    padding: 12px;
    border-bottom: 2px solid #161916;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1px;
}

td {
    padding: 25px 12px;
    vertical-align: middle;
    border-bottom: 1px solid #e0e0e0;
}

.product-info {
    display: flex;
    align-items: center;
}

.product-info img {
    margin-right: 20px;
    border-radius: 4px;
    width: 150px; /* Ajusta el ancho deseado */
    height: auto; /* Mantiene la proporción de la imagen */
}

.product-name {
    font-weight: 700;
    margin: 0 0 5px 0;
    font-size: 18px;
}

.product-size {
    color: #666;
    font-size: 14px;
    margin: 0;
}

.quantity-selector {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #272525;
    border-radius: 4px;
    overflow: hidden;
}

.quantity-btn {
    background-color: #211c1c;
    border: none;
    width: 30px;
    height: 30px;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.quantity-btn:hover {
    background-color: #252f45;
}

.quantity-input {
    width: 40px;
    height: 30px;
    text-align: center;
    border: none;
    font-size: 14px;
    font-weight: 700;
}

.privacy-policy {
    margin-top: 25px;
    font-size: 14px;
}

.privacy-policy a {
    color: #2c4563;
    text-decoration: none;
    font-weight: 700;
}

.cart-summary {
    margin-top: 25px;
    text-align: right;
}

.subtotal {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 5px;
    color: #2f4270;
}

.tax-info {
    color: #666;
    font-size: 14px;
}

footer {
    background-color: #000;
    padding: 40px 0 20px;
    margin-top: 40px;
    color: #fff;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    margin-bottom: 20px;
}

.footer-column h3 {
    font-family: 'Bebas Neue', cursive;
    font-size: 24px;
    margin-bottom: 15px;
    color: #9e9b9b;
    letter-spacing: 1px;
}

.footer-column a {
    display: block;
    color: #fff;
    text-decoration: none;
    margin-bottom: 8px;
    font-size: 14px;
    transition: color 0.3s;
}

.footer-column a:hover {
    color: #938b8b;
}

.footer-bottom {
    margin-top: 20px;
    text-align: center;
    font-size: 12px;
    color: #666;
}
    </style>


</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">
                <button class="icon-button"><i class="icon-search"></i></button>
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
                <button class="icon-button"><i class="icon-user"></i></button>
                <button class="icon-button cart">
                    <i class="icon-cart"></i>
                    <span class="cart-count">3</span>
                </button>
            </div>
        </div>
    </header>

    

    <main class="container">
        <div class="cart-header">
            <h2>Tus Productos</h2>
            <a href="{{ route('welcome')}}" class="back-link">Volver a la tienda</a> <!-- volver a welcome -->
        </div>

        <div class="cart-content">
            <table>
                <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('img/frente2.jpeg')}}" width="100" height="100">
                                <div>
                                    <p class="product-name">Playera Edicion Verano</p>
                                    <p class="product-size">Size: M</p>
                                </div>
                            </div>
                        </td>
                        <td class="price">$500.00</td>
                        <td>
                            <div class="quantity-selector">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="quantity-btn plus">+</button>
                            </div>
                        </td>
                        <td class="total">$500.00</td>
                    </tr>

                    <!--  -->
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('img/imgExample1.jpg')}}" alt="playera 1" width="100" height="100">
                                <div>
                                    <p class="product-name">Playera Edicion Invierno</p>
                                    <p class="product-size">Size: M</p>
                                </div>
                            </div>
                        </td>
                        <td class="price">$500.00</td>
                        <td>
                            <div class="quantity-selector">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="quantity-btn plus">+</button>
                            </div>
                        </td>
                        <td class="total">$500.00</td>
                    </tr>
                </tbody>
            </table>

            <div class="privacy-policy">
                <input type="checkbox" id="privacy-checkbox">
                <label for="privacy-checkbox">
                    He leído el <a href="#">Aviso de Privacidad</a>
                </label>
            </div>

            <div class="cart-summary">
                <p class="subtotal">Subtotal: $500.00 MXN</p>
                <p class="tax-info">Impuestos incluidos y envío calculado al momento de pagar</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ayuda</h3>
                    <a href="#">Contacto</a>
                    <a href="#">Envíos</a>
                    <a href="#">Devoluciones</a>
                </div>
                <div class="footer-column">
                    <h3>Acerca de</h3>
                    <a href="#">Nuestra historia</a>
                    <a href="#">Tiendas</a>
                    <a href="#">Trabaja con nosotros</a>
                </div>
                <div class="footer-column">
                    <h3>Legal</h3>
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 OZEZ. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>