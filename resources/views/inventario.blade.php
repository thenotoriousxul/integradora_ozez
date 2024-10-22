<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
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
table {
  width: 100%;
  border-collapse: collapse;
}
th,
td {
  text-align: left;
  padding: 12px;
  border-bottom: 1px solid #4a5568;
}
th {
  color: #a0aec0;
}
.product-img {
  width: 50px;
  height: 50px;
  object-fit: cover;
}
.visualizer {
  width: 300px;
  padding: 20px;
  background-color: #2d3748;
  position: fixed;
  right: -300px;
  top: 0;
  height: 100%;
  overflow-y: auto;
  transition: right 0.3s ease-in-out;
}
.visualizer.active {
  right: 0;
}
.visualizer img {
  width: 100%;
  margin-bottom: 20px;
}
.visualizer p {
  margin: 5px 0;
}
.status {
  color: #68d391;
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
tr {
  cursor: pointer;
}
tr:hover {
  background-color: #2d3748;
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
            <button id="search-btn" class="btn btn-secondary ml-2">BUSCAR</button>
          </div>
        </div>
  
        <table>
          <thead>
            <tr>
              <th>No ID</th>
              <th>Product</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr data-id="1741D">
              <td>1741D</td>
              <td>
                <img
                  src="{{asset('img/playera.jpeg')}}"
                  alt="Dollan watch"
                  class="product-img"
                />
                Dollan watch
              </td>
              <td>$ 123</td>
              <td>1108</td>
              <td>🔗 🖼️ ⋯</td>
            </tr>
            <tr data-id="1742D">
              <td>1742D</td>
              <td>
                <img
                  src="{{asset('img/playera.jpeg')}}"
                  alt="Dollan watch"
                  class="product-img"
                />
                Dollan watch
              </td>
              <td>$ 123</td>
              <td>1108</td>
              <td>🔗 🖼️ ⋯</td>
            </tr>
            <tr data-id="1743D">
              <td>1743D</td>
              <td>
                <img
                  src="{{asset('img/playera.jpeg')}}"
                  alt="Dollan watch"
                  class="product-img"
                />
                Dollan watch
              </td>
              <td>$ 123</td>
              <td>1108</td>
              <td>🔗 🖼️ ⋯</td>
            </tr>
            <tr data-id="1744D">
              <td>1744D</td>
              <td>
                <img
                  src="{{asset('img/playera.jpeg')}}"
                  alt="Dollan watch"
                  class="product-img"
                />
                Dollan watch
              </td>
              <td>$ 123</td>
              <td>1108</td>
              <td>🔗 🖼️ ⋯</td>
            </tr>
            <tr data-id="1745D">
              <td>1745D</td>
              <td>
                <img
                 src="{{asset('img/playera.jpeg')}}"
                  alt="Dollan watch"
                  class="product-img"
                /> 
                Dollan watch
              </td>
              <td>$ 123</td>
              <td>1108</td>
              <td>🔗 🖼️ ⋯</td>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
          <button>◀</button>
          <button>▶</button>
        </div>
      </main>
      <aside class="visualizer">
        <img
          src="{{asset('img/playera.jpeg')}}"
          alt="Dollan Watch"
        />
        <h2>1741D - Dollan Watch</h2>
        <p>Stock : 1108 - Warehouse 1</p>
        <p>Price : $ 123</p>
        <p class="status">Status: Ready</p>
      </aside>
  
      <script src="{{ asset('js/sideproduct.js') }}" defer></script>
      <script src="{{ asset('js/sidebar.js') }}" defer></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</body>
</html>