<?php
// para sa pagupload toh ng mga images for sneakers and barbers

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        // Database connection (replace these variables with your actual database credentials)
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

        // Insert image data into the database
        $sql = "INSERT INTO images (image) VALUES ('$imgContent')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    } else {
        echo "Error: Invalid file uploaded.";
    }
}
?>