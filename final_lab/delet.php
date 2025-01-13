<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $conn = new mysqli('localhost', 'root', '', 'shop_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM employees WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
