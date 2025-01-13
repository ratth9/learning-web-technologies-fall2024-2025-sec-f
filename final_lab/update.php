<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $conn = new mysqli('localhost', 'root', '', 'shop_management');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check_query = "SELECT COUNT(*) FROM employees WHERE username='$username'";
    $result = $conn->query($check_query);
    $row = $result->fetch_row();
    
    if ($row[0] > 1) {
        echo "Error: Username '$username' is already taken by another employee.";
    } else {
        $sql = "UPDATE employees SET name='$name', contact='$contact', password='$password' WHERE username='$username'";

        if ($conn->query($sql) === TRUE) {
            echo "Employee info updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close();
}
?>
