
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        * {
            box-sizing: border-box; /* Asegura que el padding y el border se incluyan en el ancho total */
        }

        body {
            margin: 0; /* Eliminar margen por defecto del body */
        }

        footer {
            background-color: black;
            padding: 40px 0 20px;
            color: #fff;
            overflow: hidden; /* Evitar que se genere scroll */
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px; /* Espaciado lateral */
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
        }

        .footer-column h3 {
            font-size: 26px; /* Aumentar tamaño del encabezado */
            margin-bottom: 15px;
            color: #9e9b9b;
            letter-spacing: 1px;
        }

        .footer-column a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 8px;
            font-size: 16px; /* Aumentar tamaño del texto del enlace */
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: #938b8b;
        }

        .footer-bottom {
            margin-top: 20px;
            text-align: center;
            font-size: 14px; /* Aumentar tamaño de fuente del pie de página */
            color: #666;
        }

        .social-icons {
            display: flex; /* Alinea los íconos en fila */
        }

        .social-icons a {
            color: #fff; 
            margin: 0 10px;
            font-size: 28px; /* Aumentar tamaño de los íconos */
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #938b8b; /* Color al pasar el mouse */
        }

        .footer-column p {
            font-size: 14px; /* Aumentar tamaño de fuente para la frase */
            color: #9e9b9b; /* Color de la frase */
        }
    </style>

    <footer>
        <div class="footer-content">
            <div id="contacto" class="footer-column">
                <h3>Contacto</h3>
                <a href="#">Email</a>
                <a href="#">Teléfono</a>
                <p>¡Estamos aquí para ayudarte!</p> <!-- Frase adicional -->
            </div>
            <div class="footer-column">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
                <p>¡Conéctate con nosotros en redes!</p> <!-- Frase adicional -->
            </div>
            <div class="footer-column">
                <h3>Playeras</h3>
                <p>¡Viste con estilo y comodidad!</p> <!-- Frase sobre playeras -->
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 OZEZ. Todos los derechos reservados.</p>
        </div>
