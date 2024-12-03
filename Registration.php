<?php
session_start();

if (isset($_POST['Register'])) {
    $errors = [];

    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required.";
    }

    if (empty($_POST['surname'])) {
        $errors['surname'] = "Surname is required.";
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    $password = $_POST['password'] ?? '';
    if (empty($password) || strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[\W]/', $password)) {
        $errors['password'] = "Password must include at least 8 characters, one uppercase, one lowercase, one number, and one special character.";
    }

    if (empty($_POST['zip_code'])) {
        $errors['zip_code'] = "Zip Code is required.";
    }

    if (empty($_POST['city'])) {
        $errors['city'] = "City is required.";
    }

    if (empty($_POST['country'])) {
        $errors['country'] = "Country is required.";
    }

    if (empty($_POST['phone_number'])) {
        $errors['phone_number'] = "Phone number is required.";
    }

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mental";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (empty($errors)) {
        $email = $conn->real_escape_string($_POST['email']);
        $checkEmailQuery = "SELECT id FROM users WHERE email = '$email'";
        $result = $conn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
            $errors['email'] = "This email is already registered. Please use a different email.";
        }
    }

    if (empty($errors)) {
        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $zip_code = $conn->real_escape_string($_POST['zip_code']);
        $city = $conn->real_escape_string($_POST['city']);
        $country = $conn->real_escape_string($_POST['country']);
        $phone_number = $conn->real_escape_string($_POST['phone_number']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, surname, email, password, zip_code, city, country, phone_number)
                VALUES ('$name', '$surname', '$email', '$hashed_password', '$zip_code', '$city', '$country', '$phone_number')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['user'] = [
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'city' => $city,
                'country' => $country,
                'phone_number' => $phone_number
            ];
            header("Location: Index.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo '<div class="error-container">';
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '</div>';
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Mental Health Support - Registration</title>
    
    <style>
        /* Background and layout styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('Mental2.JPEG');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set to 100vh for full viewport height */
            margin: 0;
            overflow: hidden; /* Prevent scrolling of the body */
        }

        /* Registration Layout */
        .container {
            background-color: rgba(255, 255, 255, 0.85); /* Semi-transparent white */
            border-radius: 10px;
            padding: 2rem;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            text-align: center;
            overflow-y: auto; /* Make the container scrollable */
            height: 80vh; /* Set a fixed height for the container */
        }
    
    /* Style for the error container */
    .error-container {
        background-color: #ff4d4d; /* Red background */
        color: #ffffff; /* White text */
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px; /* Rounded edges */
        font-weight: bold;
    }

        /* Header edit */
        .branding-header {
            color: #003366;
            font-size: 2rem;
            font-weight: bold;
            padding: 0.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        /* Registration title edit */
        .registration-title {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        /* Input styling */
        .form-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.7rem;
            border-radius: 15px;
            border: 1px solid #ccc;
            font-size: 1rem;
            outline: none;
            box-sizing: border-box;
        }

        /* Register button edit */
        .form-group button {
            width: 100%;
            padding: 0.7rem;
            font-size: 1rem;
            border-radius: 15px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        /* Footer editing */
        footer {
            background-color: rgba(245, 245, 245, 0.9);
            width: calc(100% - 4px);
            padding: 0.8rem;
            border-radius: 0 0 10px 10px;
            font-size: 0.9rem;
            color: #333;
            box-sizing: border-box;
            position: absolute;
            bottom: 10px; /* Adjusted to fit within the scrollable area */
            left: 2px;
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
</head>
<body>


<div class="container">
    <div class="branding-header">WHMS</div>
    <nav class="nav-links">
            <a href="Index.html">Home</a>
            <a href="MELP.html">Meet friends</a>
            <a href="PHelp_Care.html">Request Professional Help</a>
            <a href="LFeed.html">Live Message Feed</a>
            <a href="Donations.html">Donations</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contacts.html">Contact</a>
        </nav>
    <h2 class="registration-title">Registration</h2>
    <form action="registration.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
        </div>
        
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country">
        </div>
        
        <div class="form-group">
            <label for="zip_code">Zip Code:</label>
            <input type="text" id="zip_code" name="zip_code">
        </div>
        
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="form-group">
            <button type="submit" name="Register">Register</button>
        </div>
    </form>
    <p> Already have an account? <a href="Login.php" id="registerButton">Login Here</a></p>
</div>

</body>
</html>
