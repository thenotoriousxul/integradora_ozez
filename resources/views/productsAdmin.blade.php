<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Catálogo Productos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
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
      .modal-content {
        background-color: #1f2937;
        color: #fff;
      }
      .form-select {
        background-color: #374151;
        color: #fff;
        border-color: #4b5563;
      }
      .form-select:focus {
        background-color: #374151;
        color: #fff;
        border-color: #6b7280;
        box-shadow: 0 0 0 0.25rem rgba(107, 114, 128, 0.25);
      }
      .products {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        background-color: transparent;
      }
      .product {
        border: 1px solid #c6c6c6;
        padding: 10px;
        border-radius: 5px;
      }

      .product:hover {
        border: 1px solid #3f3c3c;
        padding: 10px;
        border-radius: 5px;
      }
      .product img,
      .plus {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        margin-bottom: 10px;
      }
      .plus {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .product:hover img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        margin-bottom: 10px;
        
      }

      .product-price {
        font-weight: bold;
        margin-bottom: 5px;
      }
      .product-name {
        font-size: 14px;
        margin-bottom: 5px;
      }
      .product-category {
        font-size: 12px;
        color: #666;
      }
      .action-button {
        background-color: transparent;
        border: none;
        color: #4299e1;
        cursor: pointer;
        font-size: 16px;
        margin-top: 3px;
      }
    </style>
  </head>
  <body>
    @include('partials.sidebar', ['title' => 'PRODUCTOS'])

    <div class="products">
      <div
        class="product"
        data-bs-toggle="modal"
        data-bs-target="#modalCatalogo"
      >
        <i class="fas fa-plus fa-10x plus"></i>
        <div class="product-price">$Precio</div>
        <div class="product-name">Descripción</div>
        <div class="product-category">Categoria</div>
      </div>
      <div class="product">
        <img src="{{asset('/img/prueba5.png')}}" alt="Producto 1" />
        <div class="product-price">$1,199</div>
        <div class="product-name">Playera Dia muertos</div>
        <div class="product-category">Diseño</div>
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
      <div class="product">
        <img src="{{asset('/img/imgExample1.jpg')}}" alt="Producto 2" />
        <div class="product-price">$1,799</div>
        <div class="product-name">Shorts Spacer adidas Basketball (Unisex)</div>
        <div class="product-category">Basketball</div>
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
      <div class="product">
        <img src="{{asset('/img/prueba4.png')}}" alt="Producto 3" />
        <div class="product-price">$1,799</div>
        <div class="product-name">Shorts Spacer adidas Basketball (Unisex)</div>
        <div class="product-category">Basketball</div>
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
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="modalCatalogo"
      tabindex="-1"
      aria-labelledby="modalCatalogoLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCatalogoLabel">
              Agregar Nuevo Producto
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="product">
                  <img src="{{asset('/img/prueba5.png')}}" alt="Producto 1" />
                  <div class="product-price">$1,199</div>
                  <div class="product-name">Playera Dia muertos</div>
                  <div class="product-category">Diseño</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="edicion" class="form-label"
                    >Seleccionar Edición</label
                  >
                  <select class="form-select" id="edicion">
                    <option value="">Seleccionar edición</option>
                    <option value="halloween">Edición Halloween</option>
                    <option value="navidad">Edición Navidad</option>
                    <option value="gay">Edición Gay</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-primary">
              Guardar Producto
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
