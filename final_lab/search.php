<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $conn = new mysqli('localhost', 'root', '', 'shop_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name, contact, username FROM employees WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. "<br>";
            echo "Contact: " . $row["contact"]. "<br>";
            echo "Username: " . $row["username"]. "<br>";
        }
    } else {
        echo "No employee found with the username '$username'.";
    }

    $stmt->close();
    $conn->close();
}
?>
