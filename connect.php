<?php
    $servername = "localhost";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'sns');
    if($conn->connect_error){
        die('Connection Failed : '.mysqli_connect_error());
    }else{
        $stmt = $conn->prepare("insert into singin(username, email, password) values(?, ?, ?)");
        $stmt->bind_param("sss",$username, $email, $password);
        $stmt->execute();
        echo "sign in successful";
        $stmt->close();
        $conn->close();
    }
?>