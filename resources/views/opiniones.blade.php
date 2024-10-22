<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opiniones</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
</head> 
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
.search-bar {
  flex-grow: 1;
  margin-right: 20px;
  display: flex;
  gap: 20px;
  margin-top: 10px;
  margin-bottom: 20px;
}
.search-bar input {
  width: 500px;
  padding: 10px;
  background-color: #4a5568;
  border: none;
  color: #fff;
  border-radius: 5px;
}

.dropdown {
  background-color: #4a5568;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 5px;
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
    <div class="search-bar">
        <input
          type="text"
          placeholder="Buscar por cliente, producto o contenido"
        />
        <select class="dropdown">
          <option>1 esretreklla</option>
        </select>
        <select class="dropdown">
          <option>Recientes</option>
          <option>Mas antiguas</option>
        </select>
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

    <script src="{{ asset('js/sidebar.js') }}" defer></script>
</body>
</html> 