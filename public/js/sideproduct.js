document.addEventListener("DOMContentLoaded", function () {
  const tableRows = document.querySelectorAll("tbody tr");
  const visualizer = document.querySelector(".visualizer");

  tableRows.forEach((row) => {
      row.addEventListener("click", function (event) {
          event.stopPropagation();
          const id = this.getAttribute("data-id");
          const product = this.querySelector("td:nth-child(2)").textContent.trim();
          const price = this.querySelector("td:nth-child(3)").textContent;
          const stock = this.querySelector("td:nth-child(4)").textContent;

          visualizer.querySelector("h2").textContent = `${id} - ${product}`;
          visualizer.querySelector("p:nth-of-type(1)").textContent = `Stock : ${stock} - Warehouse 1`;
          visualizer.querySelector("p:nth-of-type(2)").textContent = `Price : ${price}`;

          visualizer.classList.add("active");
      });

  

  });

document.getElementById('editButton').addEventListener('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

});

document.getElementById('deletebutton').addEventListener('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

});

  document.addEventListener("click", function (event) {
      if (!visualizer.contains(event.target) && !event.target.closest("tbody tr")) {
          visualizer.classList.remove("active");
      }
  });

  visualizer.addEventListener("click", function (event) {
      event.stopPropagation();
  });
});
