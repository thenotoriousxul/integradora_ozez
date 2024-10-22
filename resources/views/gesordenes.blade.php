<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestor de ordenes</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
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
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}
.modal-content {
  background-color: #2d3748;
  margin: 15% auto;
  padding: 20px;
  border-radius: 5px;
  width: 50%;
  max-width: 500px;
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}
.close:hover,
.close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.form-group {
  margin-bottom: 20px;
}
.form-group label {
  display: block;
  margin-bottom: 5px;
  color: #a0aec0;
}
.form-group input,
.form-group select {
  width: 100%;
  padding: 10px;
  background-color: #4a5568;
  border: none;
  color: #fff;
  border-radius: 5px;
}
.form-actions {
  text-align: right;
}
.form-actions button {
  background-color: #4299e1;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
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

<body>
    @include('partials.sidebar', ['title' => 'GESTOR DE ORDENES'])

        <button id="add-student-btn" class="btn btn-primary mb-3" data-toggle="modal" data-target="#studentModal">Agregar Cliente</button>

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

            <table>
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
                        <td><span class="status status-pending">Pendiente</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-button"><i class="fas fa-edit"></i></button>
                                <button class="action-button"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ORD003</td>
                        <td>Carlos Rodríguez</td>
                        <td>iPad Air</td>
                        <td>1</td>
                        <td>$500.00</td>
                        <td><span class="status status-process">En proceso</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-button"><i class="fas fa-edit"></i></button>
                                <button class="action-button"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                 
                </tbody>
            </table>
            <div class="pagination">
                <button>◀</button>
                <button>▶</button>
            </div>
        </main>
    </div>

    <div id="newOrderModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Nueva Orden</h2>
            <form id="newOrderForm">
                <div class="form-group">
                    <label for="clientName">Nombre del Cliente</label>
                    <input type="text" id="clientName" name="clientName" required>
                </div>
                <div class="form-group">
                    <label for="product">Producto</label>
                    <input type="text" id="product" name="product" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" required min="1">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" id="total" name="total" required min="0" step="0.01">
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select id="status" name="status" required>
                        <option value="pending">Pendiente</option>
                        <option value="processing">En proceso</option>
                        <option value="completed">Completado</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit">Crear Orden</button>
                </div>
            </form>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
</body>
</html>