(function(WGR) {
    'use strict';

    // Set variables
    var input = document.querySelector('.js-search-input'),
        products = document.querySelectorAll('.js-product');

    // Bind events
    input.addEventListener('input', filterProducts);

    function filterProducts() {
        var filterValue = input.value.toLowerCase();

        products.forEach(function(product) {
            var title = product.getAttribute('data-title').toLowerCase();

            if (title.includes(filterValue)) {
                product.classList.add('is-visible');
                product.classList.remove('is-hidden');
            } else {
                product.classList.add('is-hidden');
                product.classList.remove('is-visible');
            }
        });
    }

    function example() {
        console.log('Hello world');
    }

    WGR.example = example;

}(window.WGR = window.WGR || {}));
