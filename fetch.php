<?php
// Your database connection code goes here
//meron na ata ako netong code na toh
// Query to fetch shoe information from the database
$query = "SELECT * FROM shoes";
$result = mysqli_query($conn, $query);

// Fetch and store shoe information in an array
$shoes = [];
while ($row = mysqli_fetch_assoc($result)) {
    $shoes[] = $row;
}

// Convert the array to JSON and output it
echo json_encode($shoes);

// Close database connection
mysqli_close($conn);
?>
