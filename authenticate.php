<?php
// Database connection
$host = "localhost";
$username = "root";
$password = ""; // Replace with your database password
$dbname = "mental"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON input
    $input = json_decode(file_get_contents('php://input'), true);

    $user = $input['username'];
    $pass = $input['password'];

    // Prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user_login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["success" => true, "message" => "Login successful"]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid username or password"]);
    }

    $stmt->close();
}

$conn->close();
?>
