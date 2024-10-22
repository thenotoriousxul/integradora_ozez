document.addEventListener('DOMContentLoaded', function() {
    const tableBody = document.querySelector('tbody');
    const price = 500.00;

    function updateTotal(row) {
        const quantityInput = row.querySelector('.quantity-input');
        const totalElement = row.querySelector('.total');
        const quantity = parseInt(quantityInput.value);
        const total = price * quantity;
        totalElement.textContent = `$ ${total.toFixed(2)}`;
        
        updateSubtotal(); // Actualiza el subtotal cada vez que se cambia el total de un producto
    }

    function updateSubtotal() {
        let subtotal = 0;
        const totalElements = document.querySelectorAll('.total');
        
        totalElements.forEach((totalElement) => {
            const totalValue = parseFloat(totalElement.textContent.replace('$', '').replace(',', ''));
            subtotal += totalValue; // Suma todos los totales individuales
        });

        document.querySelector('.subtotal').textContent = `Subtotal: $ ${subtotal.toFixed(2)} MXN`; // Actualiza el subtotal
    }

    tableBody.addEventListener('click', function(event) {
        const target = event.target;

        if (target.classList.contains('minus')) {
            const row = target.closest('tr'); // Encuentra la fila más cercana
            const quantityInput = row.querySelector('.quantity-input');
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                updateTotal(row);
            }
        }

        if (target.classList.contains('plus')) {
            const row = target.closest('tr'); // Encuentra la fila más cercana
            const quantityInput = row.querySelector('.quantity-input');
            quantityInput.value = parseInt(quantityInput.value) + 1;
            updateTotal(row);
        }
    });

    tableBody.addEventListener('change', function(event) {
        if (event.target.classList.contains('quantity-input')) {
            const row = event.target.closest('tr'); // Encuentra la fila más cercana
            updateTotal(row);
        }
    });

    // Inicializar totales para cada fila y el subtotal
    document.querySelectorAll('tbody tr').forEach(row => {
        updateTotal(row);
    });
});
