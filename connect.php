<?php
// Database configuration
    /* $servername = "localhost"; // Change this to your MySQL server hostname */
    $username = $_POST['username']; // Change this to your MySQL username
    $email = $_POST['email'];
    $password = $_POST['password']; // Change this to your MySQL password
    /* $database = "sneaks_scissors"; // Change this to your MySQL database name */ 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
