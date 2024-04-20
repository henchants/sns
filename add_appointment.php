<?php
// Connect to your database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get appointment data from the AJAX request
$date = $_POST['date'];
$time = $_POST['time'];
$name = $_POST['name'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];

// Insert appointment data into the database
$sql = "INSERT INTO appointments (date, time, name, email, contact_number)
        VALUES ('$date', '$time', '$name', '$email', '$contactNumber')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
