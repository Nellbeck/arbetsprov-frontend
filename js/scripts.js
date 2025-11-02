(function(WGR) {
    'use strict';

    // Set variables
    var input = document.querySelector('.js-search-input'),
        products = document.querySelectorAll('.js-product');

    // Bind events
    input.addEventListener('input', filterProducts);

    //Hamburger menu functionality
    document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navList = document.querySelector(".site-nav ul");

    if (menuToggle && navList) {
        menuToggle.addEventListener("click", () => {
        navList.classList.toggle("open");
        });
    }
    });

    // Modal functionality
    document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("product-modal");
    const btn = document.getElementById("buy-now-btn");
    const closeBtn = document.querySelector(".close");

    btn.addEventListener("click", () => modal.style.display = "flex");
    closeBtn.addEventListener("click", () => modal.style.display = "none");

    window.addEventListener("click", (event) => {
        if (event.target === modal) modal.style.display = "none";
    });
    });

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
