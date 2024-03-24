// JavaScript code here
document.addEventListener("DOMContentLoaded", function () {
    fetchShoesData();
});

function fetchShoesData() {
    fetch('get_shoes.php')
        .then(response => response.json())
        .then(data => {
            renderShoes(data);
        })
        .catch(error => console.error('Error fetching shoes:', error));
}

function renderShoes(shoes) {
    const sneakersWrapper = document.getElementById('sneakersWrapper');
    sneakersWrapper.innerHTML = ''; // Clear existing content

    shoes.forEach(shoe => {
        const swiperSlide = document.createElement('div');
        swiperSlide.classList.add('swiper-slide');
        swiperSlide.innerHTML = `
            <img src="${shoe.image}" alt="${shoe.name}">
            <h3>${shoe.name}</h3>
            <p>$${shoe.price}</p>
            <p>${shoe.description}</p>
            <select class="sneakerSize">
                ${generateSizeOptions(shoe.sizes)}
            </select>
            <button onclick="addToCart('${shoe.name}', ${shoe.price}, this)">Add to Cart</button>
        `;
        sneakersWrapper.appendChild(swiperSlide);
    });

    // Reinitialize Swiper after adding new slides
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

function generateSizeOptions(sizes) {
    return sizes.map(size => `<option value="${size}">Size ${size}</option>`).join('');
}

function addToCart(productName, price, button) {
    const sizeSelect = button.previousElementSibling;
    const size = sizeSelect.value;
    // Your cart handling code here
}

function showTab(tabName) {
    var tabs = document.getElementsByClassName('tab-content');
    for (var i = 0; i < tabs.length; i++) {
        if (tabs[i].id === tabName + 'Tab') {
            tabs[i].classList.add('show');
        } else {
            tabs[i].classList.remove('show');
        }
    }
}

function toggleCart() {
    var cartTab = document.getElementById('cartTab');
    cartTab.classList.toggle('show');
}

function search() {
    var searchInput = document.getElementById('searchInput').value;
    alert('Search functionality is not implemented yet. You searched for: ' + searchInput);
}
