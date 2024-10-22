<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

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
.filtro {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}
.lainfo {
  background-color: #1f2937;
  border-radius: 20px;
  margin-top: 0px;
  padding: 10px;
}
.form-inline {
  color: white !important;
}
.dash-info {
  display: grid;
  gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  margin-bottom: 20px;
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
table {
  width: 100%;
  border-collapse: collapse;
}
th,
td {
  text-align: left;
  padding: 12px;
  border-bottom: 1px solid #4a5568;

  color: white !important;
}

th {
  color: #a0aec0 !important;
}
input,
select {
  background-color: #4a5568 !important;
  border: 0px !important;
  color: white !important;
  border-radius: 5px !important;
}
.pagination {
  display: flex;
  justify-content: flex-end;
  margin-top: 20px;
}
.pagination button {
  background-color: #4a5568;
  border: none;
  color: #fff;
  padding: 5px 10px;
  margin-left: 5px;
  cursor: pointer;
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

</head>
<body>
    @include('partials.sidebar', ['title' => 'GESTOR DE ORDENES'])
    
    <button id="add-student-btn" class="btn btn-primary mb-3" data-toggle="modal" data-target="#studentModal">Descargar Reporte</button>

      <div class="dash-info">
        <div class="card">
          <h2>Total de ventas</h2>
          <div class="table-info"></div>
        </div>
        <div class="card">
          <h2>Ingresos totales</h2>
          <div class="table-info"></div>
        </div>
        <div class="card">
          <h2>Nuevos clientes</h2>
          <div class="table-info"></div>
        </div>
      </div>

      <div class="lainfo">
        <div class="mb-3">
          <div class="form-inline">
            <label for="search-field" class="mr-2">Buscar por:</label>
            <select id="search-field" class="form-control mr-2">
              <option value="matricula">Matrícula</option>
              <option value="nombre">Nombre</option>
              <option value="apellido">Apellido</option>
            </select>
            <input
              type="text"
              id="search-input"
              class="form-control mr-2"
              placeholder="Buscar..."
            />
            <label for="start-date" class="mr-2"
              >Fecha de Nacimiento Desde:</label
            >
            <input type="date" id="start-date" class="form-control mr-2" />
            <label for="end-date" class="mr-2">Hasta:</label>
            <input type="date" id="end-date" class="form-control" />
            <button id="search-btn" class="btn btn-secondary ml-2">
              BUSCAR
            </button>
          </div>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Matrícula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Edad</th>
              <th>Fecha de Nacimiento</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="students-list">
            <tr>
              <td>S001</td>
              <td>2023-06-15</td>
              <td>Juan Pérez</td>
              <td>Laptop Dell XPS</td>
              <td>1</td>
              <td>$1200.00</td>
              <td>Tarjeta de crédito</td>
            </tr>
            <tr> 
              <td>S002</td>
              <td>2023-06-14</td>
              <td>María García</td>
              <td>iPhone 13</td>
              <td>1</td>
              <td>$800.00</td>
              <td>PayPal</td>
            </tr>
            <tr>
              <td>S003</td>
              <td>2023-06-13</td>
              <td>Carlos Rodríguez</td>
              <td>iPad Air</td>
              <td>1</td>
              <td>$500.00</td>
              <td>Transferencia bancaria</td>
            </tr>
          </tbody>
        </table>
        <pre id="json-output" class="mt-3"></pre>
      </div>
      <div class="pagination">
        <button>◀</button>
        <button>▶</button>
      </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
</body>
</html>