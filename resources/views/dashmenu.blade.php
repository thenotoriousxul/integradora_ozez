<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head> 

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Inter", sans-serif;
  height: 100%;
  background-color: #111827 !important;
  color: #fff !important;
}
.dash-info {
  display: grid;
  gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  margin-bottom: 40px;
}

.card {
  padding: 20px;
  border-radius: 10px;
  color: #ffffff;
}

.card:nth-child(1) {
  background: linear-gradient(to right, #ffd700, #ffa500);
}

.card:nth-child(2) {
  background: linear-gradient(to right, #00bfff, #1e90ff);
}

.card:nth-child(3) {
  background: linear-gradient(to right, #32cd32, #00fa9a);
}

.dashboard-sections {
  display: grid;
  gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

.dashboard-section {
  background-color: #1f2937;
  border-radius: 10px;
  padding: 20px;
}

.section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 15px;
}

.section-title {
  font-size: 18px;
}

.section-content {
  height: 300px;
  background-color: #3a354c;
  border-radius: 5px;
}

.raya {
  color: #ffffff;
  border: none;
  padding: 10px;
  cursor: pointer;
  font-size: 16px;
  margin-right: 10px;
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
      
    @include('partials.sidebar', ['title' => 'INVENTARIO'])

        <div class="dash-info">
          <div class="card">
            <h2>Ingresos Del Mes</h2>
            <div class="table-info"></div>
          </div>
          <div class="card">
            <h2>Ventas del mes</h2>
            <div class="table-info"></div>
          </div>
          <div class="card">
            <h2>Nuevos clientes</h2>
            <div class="table-info"></div>
          </div>
        </div>

        <div class="dashboard-sections">
          <div class="dashboard-section">
            <div class="section-header">
              <h2 class="section-title">Actividad Reciente</h2>
            </div>
            <div class="section-content"></div>
          </div>
          <div class="dashboard-section">
            <div class="section-header">
              <h2 class="section-title">Productos mas vendidos</h2>
            </div>
            <div class="section-content"></div>
          </div>
        </div>
      </main>
    </div>


    <script src="{{ asset('js/sidebar.js') }}" defer></script>
  </body>
</html>
