<?php
// Create connection to the database
$servername = "localhost"; // Change if the MySQL server is different
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "login_system"; // Replace with your database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prevent SQL Injection
    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful! Welcome, " . htmlspecialchars($user) . ".";
        // Redirect to home page
        // header('Location: home.php');
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}

$conn->close();
?>
