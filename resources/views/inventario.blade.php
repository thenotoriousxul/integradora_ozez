<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inventario</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
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
    .inventario-container {
      background-color: #1f2937;
      border-radius: 20px;
      margin-top: 0px;
      padding: 10px;
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
    input,
    select {
      background-color: #4a5568 !important;
      border: 0px !important;
      color: white !important;
      border-radius: 5px !important;
    }
    .form-inline,
    .mr2 {
      margin-right: 20px !important;
    }

    #search-input {
      margin-top: 32px;
    }
    #search-btn {
      margin-top: 32px;
    }
    .action-button {
      background-color: transparent;
      border: none;
      color: #4299e1;
      cursor: pointer;
      font-size: 16px;
    }
    #search-input {
      margin-top: 25px;
    }
    #search-btn {
      margin-top: 25px;
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

    <div class="inventario-container">
      <div class="mb-3">
        <div class="row align-items-center">
          <div class="col-md-2 col-12 mb-2">
            <label for="search-field" class="me-2 text-white"
              >Buscar por:</label
            >
            <select id="search-field" class="form-select">
              <option value="matricula">ID</option>
              <option value="nombre">Playera</option>
              <option value="apellido">Edición</option>
            </select>
          </div>
          <div class="col-md-3 col-12 mb-2">
            <input
              type="text"
              id="search-input"
              class="form-control input-text-white"
              placeholder="Buscar"
            />
          </div>
          <div class="col-md-3 col-12 mb-2">
            <label for="start-date" class="me-2 text-white"
              >Fecha de Incorporación Desde:</label
            >
            <input type="date" id="start-date" class="form-control" />
          </div>
          <div class="col-md-3 col-12 mb-2">
            <label for="end-date" class="me-2 text-white">Hasta:</label>
            <input type="date" id="end-date" class="form-control" />
          </div>
          <div class="col-md-1 col-12 mb-2">
            <button id="search-btn" class="btn btn-secondary text-white w-100">
              Buscar
            </button>
          </div>
        </div>
      </div>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Accion</th>
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
            <td>
              <div class="action-buttons">
                <button class="action-button">
                  <i
                    class="fas fa-edit"
                    data-bs-toggle="modal"
                    data-bs-target="#editarProductoModal"
                    id="editButton"
                  ></i>
                </button>
                <button class="action-button">
                  <i
                    class="fas fa-trash"
                    data-bs-toggle="modal"
                    data-bs-target="#deleteConfirmationModal"
                    id="deletebutton"
                  ></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <aside class="visualizer">
        <img src="{{asset('img/playera.jpeg')}}" alt="Dollan Watch" />
        <h2>1741D - Dollan Watch</h2>
        <p>Stock : 1108 - Warehouse 1</p>
        <p>Price : $ 123</p>
        <p class="status">Status: Ready</p>
      </aside>
    </div>

    <div
      class="modal fade"
      id="deleteConfirmationModal"
      tabindex="-1"
      aria-labelledby="deleteConfirmationLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmationLabel">
              Confirmación de Eliminación
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            ¿Estás seguro de que deseas eliminar este registro? Esta acción no
            se puede deshacer.
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancelar
            </button>
            <button type="button" class="btn btn-danger" id="confirmDelete">
              Eliminar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="editarProductoModal"
      tabindex="-1"
      aria-labelledby="editarProductoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="editarProductoModalLabel">
              Editar Producto
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="nombreProducto" class="form-label"
                  >Nombre del Producto</label
                >
                <input
                  type="text"
                  class="form-control bg-secondary text-light"
                  id="nombreProducto"
                  placeholder="Ingrese el nombre del producto"
                />
              </div>
              <div class="mb-3">
                <label for="precioProducto" class="form-label">Precio</label>
                <input
                  type="number"
                  class="form-control bg-secondary text-light"
                  id="precioProducto"
                  placeholder="Ingrese el precio del producto"
                />
              </div>
              <div class="mb-3">
                <label for="cantidadProducto" class="form-label"
                  >Cantidad</label
                >
                <input
                  type="number"
                  class="form-control bg-secondary text-light"
                  id="cantidadProducto"
                  placeholder="Ingrese la cantidad disponible"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">
              Guardar cambios
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="pagination">
      <button>◀</button>
      <button>▶</button>
    </div>

    <script src="{{ asset('js/sideproduct.js') }}" defer></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
