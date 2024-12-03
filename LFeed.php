<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support Platform - Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ADD8E6; /* Light blue background */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #liveMessageSection h3 {
            color: #333;
            margin-bottom: 15px;
            text-align: center;
            border-bottom: 2px solid #3494E6;
            padding-bottom: 10px;
        }

        #messageDisplayBox {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            min-height: 200px;
            margin-bottom: 15px;
            padding: 15px;
            overflow-y: auto;
        }

        #messageContainer {
            max-height: 150px;
            overflow-y: auto;
        }

        #userNameInput, #liveMessageBox {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #liveMessageBox {
            resize: vertical;
            min-height: 100px;
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

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
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

        .section {
            margin-top: 40px;
        }

        .section h2 {
            font-size: 24px;
        }

        .section p {
            font-size: 18px;
        }

        #liveMessageSection {
            margin-top: 30px;
        }

        #messageDisplayBox {
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            background-color: #e3f2fd;
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 15px;
        }

        #messageDisplayBox h4 {
            margin: 0 0 10px 0;
        }

        #messageContainer p {
            background-color: #fff;
            color: black;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 16px;
            text-align: left;
            line-height: 1.5;
        }

        #userNameInput,
        #liveMessageBox {
            width: 70%;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        header {
            text-align: center;
            padding: 10px 0;
        }
        #liveMessageBox {
            height: 100px;
        }

        #submitMessageButton,
        #toggleAnonymousButton {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #submitMessageButton:hover,
        #toggleAnonymousButton:hover {
            background-color: #45a049;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    
</head>
<header>
    <h1>World Mental Health Support</h1>
    <p>Free medical advice and quick care for everyone, everywhere.</p>

    <a href="profile.html">
        <span id="profileIcon" class="profile-icon">
            <i class="fas fa-user"></i> <!-- Font Awesome person icon -->
        </span>
    </a>
    </header>
<body>
<div class="bg-animation"></div>
    <div class="container">
        <nav class="nav-links">
            <a href="Index.html">Home</a>
            <a href="MELP.html">Meet friends</a>
            <a href="PHelp_Care.html">Request Professional Help</a>
            <a href="LFeed.html">Live Message Feed</a>
            <a href="Donations.html">Donations</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contacts.html">Contact</a>
        </nav>
        <section class="section">
           <!-- Live Message Section -->
            <div id="liveMessageSection">
                <h3>Live Message</h3>

                <div id="liveMessageSection">
                <h3>Live Message</h3>

                <!-- Message Display Container -->
                <div id="messageDisplayBox">
                    <h4>Message Display:</h4>
                    <div id="messageContainer"></div> <!-- Message display container -->
                </div>

                <!-- Username Input -->
                <input type="text" id="userNameInput" placeholder="Enter your username...">

                <!-- Message Input -->
                <textarea id="liveMessageBox" placeholder="Type your message here..."></textarea>

                <!-- Buttons -->
                <button id="toggleAnonymousButton">Anonymous</button>
                <button id="submitMessageButton">Submit</button>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 World Mental Health Support. All rights reserved.</p>
    </footer>

    <script>
        let isAnonymous = false;

        // Toggle anonymous mode
        document.getElementById('toggleAnonymousButton').addEventListener('click', () => {
            isAnonymous = !isAnonymous;
            const button = document.getElementById('toggleAnonymousButton');
            button.textContent = isAnonymous ? 'Show Username' : 'Anonymous';
        });

        // Handle message submission
        document.getElementById('submitMessageButton').addEventListener('click', () => {
            const userName = document.getElementById('userNameInput').value.trim();
            const messageBox = document.getElementById('liveMessageBox');
            const messageContainer = document.getElementById('messageContainer');

            const messageText = messageBox.value.trim();

            if (!isAnonymous && !userName) {
                alert('Please enter your username.');
                return;
            }

            if (messageText) {
                // Create a new message element
                const messageElement = document.createElement('p');
                messageElement.textContent = isAnonymous ? `Anonymous: ${messageText}` : `${userName}: ${messageText}`;

                // Add the message to the display container
                messageContainer.appendChild(messageElement);

                // Clear the input box
                messageBox.value = '';
            } else {
                alert('Please enter a message before submitting.');
            }
        });
    </script>
</body>

</html>
