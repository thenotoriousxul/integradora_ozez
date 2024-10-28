<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gestor de ordenes</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
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
    input,
    select {
      background-color: #4a5568 !important;
      border: 0px !important;
      color: white !important;
      border-radius: 5px !important;
    }
    .status {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 12px;
    }
    .status-process {
      background-color: #d69e2e;
    }
    .status-pending {
      background-color: #4299e1;
    }
    .action-buttons {
      display: flex;
      gap: 10px;
    }
    .action-button {
      background-color: transparent;
      border: none;
      color: #4299e1;
      cursor: pointer;
      font-size: 16px;
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
    .form-control,
    .form-select {
      background-color: #2c3034;
      color: #fff;
      border-color: #495057;
    }

    .form-control:focus,
    .form-select:focus {
      background-color: #2c3034;
      color: #fff;
    }
    #search-input {
      margin-top: 25px;
    }
    #search-btn {
      margin-top: 25px;
    }
    .action-button {
      background-color: transparent;
      border: none;
      color: #4299e1;
      cursor: pointer;
      font-size: 16px;
    }
    .ordenes-container {
      background-color: #1f2937;
      border-radius: 20px;
      margin-top: 0px;
      padding: 10px;
    }
    .mb-3 {
      padding: 10px;
    }

    .form-control::placeholder {
      color: white;
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
    @include('partials.sidebar', ['title' => 'GESTOR DE ORDENES'])

    <button
      id="add-student-btn"
      class="btn btn-primary mb-3"
      data-toggle="modal"
      data-target="#studentModal"
    >
      Agregar Cliente
    </button>
    <div class="ordenes-container">
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

      <table class="table-resposive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ORD002</td>
            <td>María García</td>
            <td>iPhone 13</td>
            <td>1</td>
            <td>$800.00</td>
            <td><span class="badge bg-warning">Pendiente</span></td>
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
    </div>
    <div class="pagination">
      <button>◀</button>
      <button>▶</button>
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
              id="Close"
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
              <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select class="form-select" id="status">
                  <option value="Pendiente" selected>Pendiente</option>
                  <option value="Completado">Completado</option>
                  <option value="Cancelado">Cancelado</option>
                </select>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
