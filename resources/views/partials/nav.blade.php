<style>
    nav {
        display: none;
    }

    @media (min-width: 768px) {
        nav {
            display: flex;
            padding: 10px 0;
            border-bottom: 2px solid white;
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

    .texto-logo {
        font-size: 1.5rem;
        color: white;
        margin-left: 12px;
    }

    .icon-button {
        color: white;
        font-size: 24px;
        margin-left: 12px;
        cursor: pointer;
    }
</style>

<header>
    <div class="container">
        <div class="header-left">
            <img src="{{ asset('img/ozeztrc.png') }}" alt="Logo de OZEZ" style="height: 100px; margin-right: 10px;">
        </div>
        <nav>
            <a href="#catalogo">CATÁLOGO</a>
            <a href="#personalizacion">PERSONALIZACIÓN</a>
            <a href="#nosotros">SOBRE NOSOTROS</a>
        </nav>
        <div class="header-right">
            <a href="/login" class="icon-button"><i class="bi bi-person-circle"></i></a>
            <a href="/cart" class="icon-button"><i class="bi bi-cart"></i></a>
        </div>
    </div>
</header>
