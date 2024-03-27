<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaks&Scissors</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="sns.css">
</head>
<body>

<header>
    <img id="logo" src="imgs/logo.png">
    <h1>Sneaks & Scissors</h1>
    <div class="search-bar">
        <input type="text" placeholder="Search..." id="searchInput">
        <button onclick="search()">Search</button>
    </div>
    <a href="#" onclick="showTab('signup')" class="signup-button">Sign Up</a>
</header>

<nav>
    <a href="#" onclick="showTab('barbery')">Barbery</a>
    <a href="#" onclick="showTab('sneakers')">Sneakers</a>
    <a href="#" onclick="showTab('apparel')">Apparel</a>
    
    <div class="cart" onclick="toggleCart()">Cart<span class="cart-items">0</span></div>
</nav>

<div class="content">
    <!-- tab ng sneakers -->
    <div id="sneakersTab" class="tab-content show">
        <h2>Sneakers</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                // Fetch sneakers data from the database and dynamically generate HTML
                $servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "database_name";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch sneakers data
                $sql = "SELECT * FROM sneakers";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="swiper-slide">';
                        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                        echo '<h3>' . $row['name'] . '</h3>';
                        echo '<p>$' . $row['price'] . '</p>';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '<select id="sneakerSize' . $row['id'] . '">';
                        // Assuming sizes are stored in the database
                        // Modify this part based on your database structure
                        echo '<option value="5">Size 5</option>';
                        echo '<option value="6">Size 6</option>';
                        echo '<option value="7">Size 7</option>';
                        echo '<option value="8">Size 8</option>';
                        echo '<option value="9">Size 9</option>';
                        echo '<option value="10">Size 10</option>';
                        echo '</select>';
                        echo '<button onclick="addToCart(\'' . $row['name'] . '\', ' . $row['price'] . ', \'sneakerSize' . $row['id'] . '\')">Add to Cart</button>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- tab for barbery category -->
    <div id="barberyTab" class="tab-content">
        <h2>Barbery</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Fetch and dynamically generate barber products -->
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- tab for Apparel (to be fetched from the database) -->
    <div id="apparelTab" class="tab-content">
        <h2>Apparel</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Fetch and dynamically generate apparel products -->
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- tab for Sign Up -->
    <div id="signupTab" class="tab-content">
        <h2>Sign Up</h2>
        <!-- Your sign-up form remains unchanged -->
    </div>

</div>

<!-- Cart Tab -->
<div id="cartTab" class="cart-tab">
    <h2>Shopping Cart</h2>
    <div id="cartItems"></div>
    <button class="checkout-button" onclick="checkout()">Checkout</button>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Thank you for your purchase!</p>
    </div>
</div>

<footer>
    <p class="rights">&copy; 2024 Sneaks&Scissors. All rights reserved.</p>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // JavaScript code remains unchanged
</script>

</body>
</html>
