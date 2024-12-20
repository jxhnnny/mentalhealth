<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support Platform - Contact</title>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #ADD8E6; /* Light blue */
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
}

header h1 {
    margin: 0;
}

.nav-links {
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
    padding: 15px;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: left;
}

.profile-container h3 {
    margin: 10px 0;
}

.profile-container label {
    font-weight: bold;
}

.profile-container .radio-buttons {
    margin: 10px 0;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
textarea {
    width: 70%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 20px;
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
</style>

<body>
    <div class="container">
        <section id="home" class="section">
            <header>
                <h1>World Mental Health Support</h1>
                <p>Free medical advice and quick care for everyone, everywhere.</p>

                <a href="profile.html">
                    <span id="profileIcon" class="profile-icon">
                        <i class="fas fa-user"></i> <!-- Font Awesome person icon -->
                    </span>
                </a>
                </header>
    <div class="container">
        <section class="section">
            <header>
                <nav class="nav-links">
                    <a href="Index.html">Home</a>
                    <a href="MELP.html">Meet friends</a>
                    <a href="PHelp_Care.html">Request Professional Help</a>
                    <a href="LFeed.html">Live Message Feed</a>
                    <a href="Donations.html">Donations</a>
                    <a href="AboutUs.php">About Us</a>
                    <a href="Contacts.html">Contact</a>
                </nav>
                
            </header>

            <!-- Profile Container -->
            <div class="profile-container">
                <h3>Profile</h3>
                <p><strong>Name:</strong> Dr. Nelson Nelumbuh</p>
                <p><strong>Speciality:</strong> Psychiatry</p>
                <p><strong>Email:</strong> elizethlazaro2001@gmail.com</p>

                <!-- Radio Buttons for selecting services -->
                <div class="radio-buttons">
                    <label><input type="radio" name="service" value="advice" data-email="elizethlazaro2001@gmail.com"> Medical Advice</label><br>
                    <label><input type="radio" name="service" value="therapy" data-email="elizethlazaro2001@gmail.com"> Therapy Session</label><br>
                </div>
            </div>

            <div class="profile-container">
                <h3>Profile</h3>
                <p><strong>Name:</strong> Dr. Alan Gomes</p>
                <p><strong>Speciality:</strong> Clinical Psychology</p>
                <p><strong>Email:</strong> iorquigomes@gmail.com</p>

                <!-- Radio Buttons for selecting services -->
                <div class="radio-buttons">
                    <label><input type="radio" name="service" value="advice" data-email="iorquigomes@gmail.com"> Medical Advice</label><br>
                    <label><input type="radio" name="service" value="therapy" data-email="iorquigomes@gmail.com"> Therapy Session</label><br>
                </div>
            </div>
            <div class="profile-container">
                <h3>Profile</h3>
                <p><strong>Name:</strong> Dr. Edmilson Barros</p>
                <p><strong>Speciality:</strong> Eating Disorders</p>
                <p><strong>Email:</strong> edmilson.barros@prodtechnology.com</p>

                <!-- Radio Buttons for selecting services -->
                <div class="radio-buttons">
                    <label><input type="radio" name="service" value="advice" data-email="iorquigomes@gmail.com"> Medical Advice</label><br>
                    <label><input type="radio" name="service" value="therapy" data-email="iorquigomes@gmail.com"> Therapy Session</label><br>
                </div>
            </div>
            <div class="profile-container">
                <h3>Profile</h3>
                <p><strong>Name:</strong> Dr. Zauma Gomes</p>
                <p><strong>Speciality:</strong> Trauma and PTSD</p>
                <p><strong>Email:</strong> alangomes19804@gmail.com</p>

                <!-- Radio Buttons for selecting services -->
                <div class="radio-buttons">
                    <label><input type="radio" name="service" value="advice" data-email="iorquigomes@gmail.com"> Medical Advice</label><br>
                    <label><input type="radio" name="service" value="therapy" data-email="iorquigomes@gmail.com"> Therapy Session</label><br>
                </div>
            </div>

            <h2>Get Medical Advice</h2>
            <form id="adviceForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="issue">Describe Your Issue:</label>
                    <textarea id="issue" name="issue" rows="5" placeholder="Describe your mental health issue..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 World Mental Health Support. All rights reserved.</p>
    </footer>

    <script>
        // Fetch user data for the display name
        async function fetchUserData() {
            try {
                const response = await fetch('http://localhost:5000/api/user', {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}` // Fixed template string
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to fetch user data.');
                }

                const userData = await response.json();
                document.getElementById('userNameDisplay').textContent = `Welcome, ${userData.name}!`; // Fixed string interpolation
            } catch (error) {
                console.error(error);
                document.getElementById('userNameDisplay').textContent = 'Welcome, Guest!';
            }
        }

        // Handle form submission and send email
        document.getElementById('adviceForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const issue = document.getElementById('issue').value;
            const selectedProfile = document.querySelector('input[name="service"]:checked');

            if (!selectedProfile) {
                alert('Please select a service.');
                return;
            }

            const profileEmail = selectedProfile.getAttribute('data-email');
            const subject = `${selectedProfile.value.charAt(0).toUpperCase() + selectedProfile.value.slice(1)} Request`;
            const body = `Name: ${name}\nEmail: ${email}\nIssue: ${issue}`;

            // Redirect to the selected profile's email with the message
            window.location.href = `mailto:${profileEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        });

        // Load user data on page load
        window.onload = fetchUserData;
    </script>
</body>

</html>
