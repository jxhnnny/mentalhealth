<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'] ?? '';

    // Validation for empty fields
    $errors = [];
    if (empty($email)) $errors[] = "Email is required.";
    if (empty($password)) $errors[] = "Password is required.";

    if (empty($errors)) {
        // Query to fetch user details by email
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user with the email exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Store user data in session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'surname' => $user['surname'],
                    'email' => $user['email'],
                    'city' => $user['city'],
                    'country' => $user['country'],
                    'phone_number' => $user['phone_number']
                ];

                // Redirect to profile page
                header("Location: profile.php");
                exit();
            } else {
                $errors[] = "Invalid email or password.";
            }
        } else {
            $errors[] = "No account found with this email address.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    
        /* Apply background image to the whole page */
        body {
            background-image: url('Care11.JPEG');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            flex-direction: column;
        }

        /* Error container styling */
        .error-container {
            background-color: #ff4d4d;
            color: #ffffff;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-weight: bold;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Centered login container with some styling */
        .container {
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        /* Title styling */
        header h1 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Form input fields with rounded edges and centering */
        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            border-radius: 15px;
            border: 1px solid #ccc;
            font-size: 1rem;
            outline: none;
            box-sizing: border-box;
        }

        /* Login button styling */
        .form-group button[type="submit"] {
            width: 100%;
            padding: 0.7rem;
            font-size: 1rem;
            border-radius: 15px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .form-group button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Registration link button styling */
        #registerButton {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            background-color: lightgreen;
            border: 1px solid #333;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        #registerButton:hover {
            background-color: #a5d6a7;
        }

        /* Footer styling */
        footer {
            background-color: rgba(245, 245, 245, 0.9);
            width: calc(100% - 4px);
            padding: 0.8rem;
            border-radius: 0 0 10px 10px;
            font-size: 0.9rem;
            color: #333;
            box-sizing: border-box;
            position: absolute;
            bottom: -60px;
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
<nav class="nav-links">
            <a href="Index.html">Home</a>
            <a href="MELP.html">Meet friends</a>
            <a href="PHelp_Care.html">Request Professional Help</a>
            <a href="LFeed.html">Live Message Feed</a>
            <a href="Donations.html">Donations</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contacts.html">Contact</a>
        </nav>
    <!-- HTML Login Form -->
    <div class="container">
        <header>
            <h1>Welcome to World Mental Health Support</h1>
            <p>Connect, share, and support one another.</p>
        </header>
       

        <!-- Error Messages -->
        <?php if (!empty($errors)): ?>
            <div class="error-container">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <section class="section">
            <form action="Login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required 
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
            <p>Don't have an account? <a href="Registration.php" id="registerButton">Register Here</a></p>
        </section>
    </div>
</body>

</html>
