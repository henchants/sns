<?php
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    // If not logged in, redirect to the login page
    header("Location: admin_login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sneaks & Scissors</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h1>Admin Panel - Sneaks & Scissors</h1>
        <a href="admin_logout.php">Logout</a>
    </header>

    <main>
        <!-- Your tables and other content here -->
        <!-- Example table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody>
                <!-- Add table rows with data -->
                <tr>
                    <td>1</td>
                    <td>Product 1</td>
                    <td>Description of Product 1</td>
                    <!-- Add more table cells as needed -->
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Sneaks & Scissors. All rights reserved.</p>
    </footer>
</body>
</html>
