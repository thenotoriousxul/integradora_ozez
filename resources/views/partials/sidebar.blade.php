<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidebar</title>
</head>
<style>
.sidebar-container {
  background-color: #1f2937;
  width: 250px;
  padding: 25px;
  height: 100vh;
  position: fixed;
  transition: all 0.4s ease-in-out;
  overflow-y: auto;
  z-index: 1000;
  box-shadow: 3px 0 15px rgba(0, 0, 0, 0.5);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 0 10px 10px 0;
  display: flex; 
  flex-direction: column; 
}
.sidebar-container.hidden {
  transform: translateX(-280px);
}
.logo-container {
  text-align: center;
  margin-bottom: 30px;
    flex-shrink: 0; 
}
.logo img {
  max-width: 90%;
  max-height: 80px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(107, 91, 255, 0.5);
  transition: transform 0.3s ease;
}
.logo img:hover {
  transform: scale(1.05);
}
.page-container {
  margin-bottom: 35px;
}
.title-section {
  color: #7c3aed;
  margin-bottom: 15px;
  font-size: 15px;
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 1.2px;
}

.item-side {
  display: flex;
  align-items: center;
  padding: 8px 13px;
  text-decoration: none;
  color: white;
  font-size: 15px;
  border-radius: 12px;
  margin-bottom: 15px;
  background-color: transparent;
  transition: background-color 0.4s ease, transform 0.3s ease,
    box-shadow 0.4s ease;
  position: relative;
}

.item-side:hover {
  background-color: #374151;
  box-shadow: 0 10px 20px rgba(107, 91, 255, 0.6);
  transform: translateX(10px);
  color: white;
  text-decoration: none;
}
.item-side i {
  margin-right: 15px;
  font-size: 22px;
  color: #7c3aed;
  transition: color 0.3s ease;
}

.item-side:hover i {
  color: #9f7aea;
}
.item-side .sidebar-text {
  display: inline-block;
  opacity: 1;
  transition: opacity 0.3s ease-in-out;
}
.item-side:after {
  content: "";
  position: absolute;
  height: 100%;
  width: 5px;
  background-color: #7c3aed;
  left: 0;
  top: 0;
  border-radius: 0 4px 4px 0;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.item-side:hover:after {
  opacity: 1;
}
.sidebar-container.collapsed {
  width: 80px; 
}
.sidebar-container.collapsed .item-side .sidebar-text {
  display: none; 
}
.sidebar-container.collapsed .item-side i {
  margin-right: 0; 
}

.item-side:hover .sidebar-text {
  opacity: 1; 
}

.dash-body {
  flex-grow: 1;
  padding: 20px;
  margin-left: 250px;
  transition: margin-left 0.3s ease-in-out;
}

.dash-body.expanded {
  margin-left: 0;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  background-color: #1f2937;
  border-radius: 10px;
  height: 60px;
}

.raya {
  background-color: transparent;
  border: none;
  color: #ffffff;
  font-size: 24px;
  cursor: pointer;
  padding: 10px;
  margin-right: 10px;
}

.raya:hover {
  background-color: #374151;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.title-dash {
  font-size: 25px;
  margin-left: 10px;
  font-weight: lighter;
}

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  z-index: 999; 
}
.eliconuser
{
  margin-right:30px; 
}
.menu-container {
  flex-grow: 1; 
  overflow-y: auto; 
  padding-right: 10px; 
}


.menu-container::-webkit-scrollbar {
  width: 0px;
  background: transparent;
}
.submenu
{
  display: none; 
  padding-left: 20px;
}
.abajo
{
  margin-left: auto;
}

@media (max-width: 768px) {
  .sidebar-container {
    transform: translateX(-100%);
    width: 100%;
    max-width: 320px;
  }
  .sidebar-container.hidden {
    transform: translateX(-100%);
  }
  .sidebar-container.visible {
    transform: translateX(0);
  }
  .dash-body {
    margin-left: 0;
    width: 100%;
  }
  .dash-body.expanded {
    margin-left: 0;
  }
  .overlay.visible {
    display: block;
  }
}
</style>
<body>
    <aside class="sidebar-container">
        <div class="logo-container">
          <p class="logo"><img src="{{asset('img/ozeztrc.png')}}" alt="Logo" /></p>
        </div>
        <div class="menu-container">
        <div class="page-container">
          <h3 class="title-section">Menú</h3>
          <a class="item-side" href=""
            ><i class="fas fa-home"></i
            ><span class="sidebar-text">Menu principal</span></a
          >
        </div>
        <div class="page-container">
          <h3 class="title-section">Administración</h3>
          <a id="inventario-item" class="item-side" href=""
            ><i class="fas fa-box"></i
            ><span class="sidebar-text">Inventario</span>
            <i class="fas fa-chevron-down abajo"></i></a
          >
          <div id="inventario-submenu" class="submenu">
            <a class="item-side sub" href="">
              <i class="fas fa-list"></i>
              <span class="sidebar-text">Lista de Inventario</span>
            </a>
            <a class="item-side sub" href="">
              <i class="fas fa-plus"></i>
              <span class="sidebar-text">Agregar Producto</span>
            </a>
          </div>
          <a class="item-side" href=""
            ><i class="fas fa-clipboard-list"></i
            ><span class="sidebar-text">Opiniones</span></a
          >
          <a class="item-side" href=""
            ><i class="fas fa-history"></i
            ><span class="sidebar-text">Historial</span></a
          >
          <a id="ordenes" class="item-side" href=""
            ><i class="fas fa-truck"></i
            ><span class="sidebar-text">Gestor de Ordenes</span>
            <i class="fas fa-chevron-down abajo" ></i></a
          >
          <div id="ordenes-submenu" class="submenu">
            <a class="item-side sub" href="">
              <i class="fas fa-list"></i>
              <span class="sidebar-text">Lista de Ordenes</span>
            </a>
            <a class="item-side sub" href="">
              <i class="fas fa-plus"></i>
              <span class="sidebar-text">Agregar Orden</span>
            </a>
          </div>
        </div>
        <div class="page-container">
          <h3 class="title-section">Configuración</h3>
          <a id="configuracion" class="item-side" href=""
            ><i class="fas fa-cogs"></i
            ><span class="sidebar-text">Ajustes</span>
            <i class="fas fa-chevron-down abajo" ></i></a
          >
          <div id="configuracion-submenu" class="submenu">
            <a class="item-side sub" href="">
              <i class="fas fa-list"></i>
              <span class="sidebar-text">Ver Usuarios</span>
            </a>
            <a class="item-side sub" href="">
              <i class="fas fa-plus"></i>
              <span class="sidebar-text">Agregar Usuario</span>
            </a>
          </div>
          <a class="item-side" href=""
            ><i class="fas fa-globe"></i
            ><span class="sidebar-text">Página principal</span></a
          >
        </div>
      </div>
      </aside>

      <div class="overlay" id="overlay"></div>

      <main class="dash-body" id="dash-body">
        
  
        <header class="header">
          <button id="raya" class="raya"><i class="fas fa-bars"></i></button>
          <div class="title-dashh">
            <h1 class="title-dash">{{ $title ?? 'Dashboard' }}</h1>
          </div>
        
          <div class="eliconuser">
            <i class="fas fa-user fa-lg"></i>
          </div>
         

    
        </header>
        <script src="{{ asset('js/sidebar.js') }}" defer></script>

       

</body>
</html>