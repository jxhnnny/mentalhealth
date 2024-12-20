<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // If user is not logged in, redirect to login page
    header("Location: Login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user information from database
$user_id = $_SESSION['user_id']; // Assuming you store user ID in session during login
$sql = "SELECT name, surname, email, city, country, phone_number FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // If no user found, destroy session and redirect to login
    session_destroy();
    header("Location: Login.php");
    exit();
}

$stmt->close();
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support Platform - Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ADD8E6; /* Light blue background */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        .header-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-login {
            background-color: #4CAF50;
            color: white;
        }

        .btn-register {
            background-color: #2196F3;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .nav-links {
            width: 90%;
            text-align: center;
            margin: 20px 0;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
        }

        .nav-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #000000;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #4CAF50;
        }

        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
            text-align: left;
        }

        .profile-container h1 {
            text-align: center;
        }

        .profile-container p {
            font-size: 18px;
            margin: 10px 0;
        }

        .profile-container a {
            text-decoration: none;
            color: #4CAF50;
        }

        .profile-container a:hover {
            text-decoration: underline;
        }

        #profileIcon {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #4CAF50; /* Green background */
            border-radius: 50%; /* Circular shape */
            color: white;
            font-size: 20px; /* Icon size */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            text-decoration: none;
        }

        #profileIcon:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    }
        .nav-links {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 10px 0;
            margin-bottom: 1rem;
            text-align: center;
        }

        .nav-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #003366;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #4CAF50;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<nav class="nav-links">
            <a href="Index.html">Home</a>
            <a href="MELP.html">Meet friends</a>
            <a href="PHelp_Care.html">Request Professional Help</a>
            <a href="LFeed.html">Live Message Feed</a>
            <a href="Donations.html">Donations</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contacts.html">Contact</a>
        </nav>
    <header>
        <div>
            <h1>World Mental Health Support</h1>
            <p>Free medical advice and quick care for everyone, everywhere.</p>
        </div>
        <div class="header-buttons">
            <a href="login.php" class="btn btn-login">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>
            <a href="Registration.php" class="btn btn-register">
                <i class="fas fa-user-plus"></i> Register
            </a>
            <a href="profile.html">
                <span id="profileIcon" class="profile-icon">
                    <i class="fas fa-user"></i>
                </span>
            </a>
        </div>
    </header>

    <div class="container">
        <div class="profile-container">
            <h1>Welcome, <?= htmlspecialchars($user['name']) ?></h1>
            <p><strong>Surname:</strong> <?= htmlspecialchars($user['surname']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            <p><strong>City:</strong> <?= htmlspecialchars($user['city']) ?></p>
            <p><strong>Country:</strong> <?= htmlspecialchars($user['country']) ?></p>
            <p><strong>Phone Number:</strong> <?= htmlspecialchars($user['phone_number']) ?></p>
            <?php if(isset($_SESSION['user'])): ?>
        <p><a href="logout.php">Logout</a></p>
    <?php endif; ?>
        </div>
    </div>
</body>

</html>
