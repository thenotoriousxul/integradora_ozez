<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar Producto</title>
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
      label
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
    @include('partials.sidebar', ['title' => 'NUEVO PRODUCTO'])

    <div class="card">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="nombreProducto" class="form-label"
              >Nombre del Producto</label
            >
            <input
              type="text"
              class="form-control"
              id="nombreProducto"
              placeholder="Ingrese el nombre del producto"
              required
            />
          </div>
          <div class="mb-3">
            <label for="descripcionProducto" class="form-label"
              >Descripción</label
            >
            <textarea
              class="form-control"
              id="descripcionProducto"
              rows="3"
              placeholder="Ingrese la descripción del producto"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <label for="precioProducto" class="form-label">Precio</label>
            <input
              type="number"
              class="form-control"
              id="precioProducto"
              placeholder="Ingrese el precio del producto"
              step="0.01"
              required
            />
          </div>
          <div class="mb-3">
            <label for="cantidadProducto" class="form-label">Cantidad</label>
            <input
              type="number"
              class="form-control"
              id="cantidadProducto"
              placeholder="Ingrese la cantidad disponible"
              required
            />
          </div>
          <div class="mb-3">
            <label for="imagenProducto" class="form-label"
              >Imagen del Producto</label
            >
            <input
              type="file"
              class="form-control"
              id="imagenProducto"
              accept="image/*"
              required
            />
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">
              Agregar Producto
            </button>
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
