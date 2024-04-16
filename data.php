<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection code
    include 'db_connection.php';

    // Get form data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO products (name, price, description, image_url) VALUES (?, ?, ?, ?)";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sds", $name, $price, $description, $image_url);
    
    // Check if the statement was executed successfully
    if ($stmt->execute()) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<!--this is for the html that will be put to connect database for insertion-->
<form action="insert_product.php" method="post">
    <!-- Form fields for product name, price, description, and image URL -->
</form>

<!--CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image_url VARCHAR(255)
);
-->
