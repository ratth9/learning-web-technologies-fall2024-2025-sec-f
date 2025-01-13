<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    
    $conn = new mysqli('localhost', 'root', '', 'shop_management');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO employees (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
