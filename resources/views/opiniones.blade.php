<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Opiniones</title>
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

    input,
    select {
      background-color: #4a5568 !important;
      border: 0px !important;
      color: white !important;
      border-radius: 5px !important;
    }

    .review-card {
      background-color: #2d3748;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .review-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .review-title {
      font-size: 18px;
      font-weight: bold;
    }
    .review-meta {
      color: #a0aec0;
      font-size: 14px;
    }
    .review-rating {
      color: #f6e05e;
    }
    .review-content {
      margin-bottom: 10px;
    }
    .review-votes {
      display: flex;
      gap: 10px;
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
      margin-top: 24px;
    }
    #search-btn {
      margin-top: 24px;
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
    @include('partials.sidebar', ['title' => 'OPINIONES'])
    <div class="mb-3">
      <div class="row align-items-center">
        <div class="col-md-2 col-12 mb-2">
          <label for="search-field" class="me-2">Buscar por:</label>
          <select id="search-field" class="form-select">
            <option value="matricula">ID</option>
            <option value="nombre">Playera</option>
            <option value="apellido">Edición</option>
          </select>
        </div>
        <div class="col-md-3 col-12 mb-2">
          <label for="search-input" class="visually-hidden">Buscar</label>
          <input
            type="text"
            id="search-input"
            class="form-control"
            placeholder="Buscar"
          />
        </div>
        <div class="col-md-1 col-12 mb-2">
          <button id="search-btn" class="btn btn-secondary w-100">
            Buscar
          </button>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="review-header">
        <div>
          <div class="review-title">Laptop Dell XPS</div>
          <div class="review-meta">Juan Pérez</div>
        </div>
        <div class="review-rating">★★★★★</div>
      </div>
      <div class="review-content">
        Excelente producto, superó mis expectativas.
      </div>
    </div>
    <div class="review-card">
      <div class="review-header">
        <div>
          <div class="review-title">Laptop Dell XPS</div>
          <div class="review-meta">Juan Pérez</div>
        </div>
        <div class="review-rating">★★★★★</div>
      </div>
      <div class="review-content">
        Excelente producto, superó mis expectativas.
      </div>
    </div>
    <div class="pagination">
      <button>◀</button>
      <button>▶</button>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
