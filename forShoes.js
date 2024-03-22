// Function to fetch shoe information from the backend
function fetchShoes() {
    fetch('backend/shoes.php') // Replace 'backend/shoes.php' lang with our backend API endpoint
        .then(response => response.json())
        .then(data => {
            const sneakersWrapper = document.getElementById('sneakersWrapper');
            data.forEach(shoe => {
                const { name, description, price, image } = shoe;
                const sneakerHTML = `
                    <div class="swiper-slide">
                        <img src="${image}" alt="${name}">
                        <h3>${name}</h3>
                        <p>$${price}</p>
                        <p>${description}</p>
                        <select class="sneakerSize">
                            <option value="5">Size 5</option>
                            <option value="6">Size 6</option>
                            <option value="7">Size 7</option>
                            <option value="8">Size 8</option>
                            <option value="9">Size 9</option>
                            <option value="10">Size 10</option>
                        </select>
                        <button onclick="addToCart('${name}', ${price}, 'sneakerSize')">Add to Cart</button>
                    </div>
                `;
                sneakersWrapper.innerHTML += sneakerHTML;
            });
            // Re-initialize Swiper after adding dynamic content
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        })
        .catch(error => console.error('Error fetching shoes:', error));
}

// Call fetchShoes function when the page loads
window.onload = fetchShoes;
