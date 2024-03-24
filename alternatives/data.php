<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch shoe data from database
$sql = "SELECT * FROM shoes";
$result = $conn->query($sql);

$shoes = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $shoes[] = $row;
    }
}

// Handle sign up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $signup_username = $_POST["username"];
    $signup_email = $_POST["email"];
    $signup_password = $_POST["password"];
    
    // Prepare SQL statement to insert data into the table
    $sql_signup = "INSERT INTO users (username, email, password) VALUES ('$signup_username', '$signup_email', '$signup_password')";
    
    if ($conn->query($sql_signup) === TRUE) {
        $signup_message = "New record created successfully";
    } else {
        $signup_message = "Error: " . $sql_signup . "<br>" . $conn->error;
    }
}

$conn->close();

// Return shoe data and sign up message as JSON
$response = array(
    'shoes' => $shoes,
    'signup_message' => $signup_message ?? null
);

header('Content-Type: application/json');
echo json_encode($response);
?>
