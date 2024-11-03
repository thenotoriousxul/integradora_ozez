<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar Orden</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
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
      .card {
        background-color: #1f2937;
        border: none;
      }
      .form-control,
      .form-select {
        background-color: #374151;
        color: #e5e7eb;
        border-color: #4b5563;
      }
      .form-control:focus,
      .form-select:focus {
        background-color: #374151;
        color: #e5e7eb;
        border-color: #60a5fa;
        box-shadow: 0 0 0 0.25rem rgba(96, 165, 250, 0.25);
      }
      .form-control::placeholder {
        color: #9ca3af;
      }
      .btn-primary {
        background-color: #3b82f6;
        border-color: #3b82f6;
      }
      .btn-primary:hover {
        background-color: #2563eb;
        border-color: #2563eb;
      }
      label,h4
      {
        color: #ffff;
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
    @include('partials.sidebar', ['title' => 'NUEVA ORDEN'])

    <div class="card">
      <div class="card-body">
        <form>
          <h4 class="mb-3">Información del Cliente</h4>
          <div class="mb-3">
            <label for="nombreCliente" class="form-label"
              >Nombre del Cliente</label
            >
            <input
              type="text"
              class="form-control"
              id="nombreCliente"
              placeholder="Ingrese el nombre del cliente"
              required
            />
          </div>
          <div class="mb-3">
            <label for="emailCliente" class="form-label"
              >Email del Cliente</label
            >
            <input
              type="email"
              class="form-control"
              id="emailCliente"
              placeholder="Ingrese el email del cliente"
              required
            />
          </div>
          <div class="mb-3">
            <label for="telefonoCliente" class="form-label"
              >Teléfono del Cliente</label
            >
            <input
              type="tel"
              class="form-control"
              id="telefonoCliente"
              placeholder="Ingrese el teléfono del cliente"
              required
            />
          </div>
          <div class="mb-3">
            <label for="direccionEnvio" class="form-label"
              >Dirección de Envío</label
            >
            <textarea
              class="form-control"
              id="direccionEnvio"
              rows="3"
              placeholder="Ingrese la dirección de envío"
              required
            ></textarea>
          </div>

          <h4 class="mb-3 mt-4">Detalles de la Orden</h4>
          <div class="mb-3">
            <label for="producto" class="form-label">Producto</label>
            <select class="form-select" id="producto" required>
              <option value="">Seleccione un producto</option>
              <option value="1">Producto 1</option>
              <option value="2">Producto 2</option>
              <option value="3">Producto 3</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input
              type="number"
              class="form-control"
              id="cantidad"
              min="1"
              placeholder="Ingrese la cantidad"
              required
            />
          </div>
          <div class="mb-3">
            <label for="precioUnitario" class="form-label"
              >Precio Unitario</label
            >
            <input
              type="number"
              class="form-control"
              id="precioUnitario"
              step="0.01"
              placeholder="Ingrese el precio unitario"
              required
            />
          </div>
          <div class="mb-3">
            <label for="metodoPago" class="form-label">Método de Pago</label>
            <select class="form-select" id="metodoPago" required>
              <option value="">Seleccione un método de pago</option>
              <option value="tarjeta">En efectivo</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="estadoOrden" class="form-label"
              >Estado de la Orden</label
            >
            <select class="form-select" id="estadoOrden" required>
              <option value="">Seleccione un estado</option>
              <option value="pendiente">Pendiente</option>
              <option value="procesando">Procesando</option>
              <option value="enviado">Enviado</option>
              <option value="entregado">Entregado</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Agregar Orden</button>
          </div>
        </form>
      </div>
    </div>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
