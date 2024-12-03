<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - World Mental Health Support</title>
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

        /* Free perceptual map for images */
        .free-map {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            justify-items: center;
            align-items: center;
            margin: 20px 0;
        }

        .free-map img {
            width: 100%;
            max-width: 150px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* YouTube links section */
        .youtube-links {
            display: flex;
            justify-content: space-evenly;
            margin: 30px 0;
        }

        .youtube-links iframe {
            width: 45%;
            height: 315px;
            border: none;
            border-radius: 8px;
        }

        /* External links section */
        .external-links {
            margin-top: 40px;
            text-align: center;
        }

        .external-links a {
            display: inline-block;
            margin: 10px;
            font-size: 16px;
            color: #4CAF50;
            text-decoration: none;
        }

        .external-links a:hover {
            color: #45a049;
        }

        footer {
            text-align: center;
            margin-top: 40px;
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

<body>

    <div class="container">
        <section class="section">
            <header>
                <h1>World Mental Health Support</h1>
                <h1>Welcome to World Mental Health Support</h1>
                
                <p>Free medical advice and quick care for everyone, everywhere.</p>
            
                <a href="profile.html">
                    <span id="profileIcon" class="profile-icon">
                        <i class="fas fa-user"></i> <!-- Font Awesome person icon -->
                    </span>
                </a>
            </header>

            <nav class="nav-links">
                <a href="Index.html">Home</a>
                <a href="MELP.html">Meet friends</a>
                <a href="PHelp_Care.html">Request Professional Help</a>
                <a href="LFeed.html">Live Message Feed</a>
                <a href="Donations.html">Donations</a>
                <a href="AboutUs.php">About Us</a>
                <a href="Contacts.html">Contact</a>
            </nav>

            <h2>About Us</h2>
            <p>We are a team of mental health professionals, volunteers, and tech enthusiasts who believe that mental health support should be free and accessible to everyone. Our platform connects users with licensed professionals for quick and effective advice.</p>

            <section class="Mental health section">
                <h2>Our Mental Health</h2>
                <div class="free-map">
                    <img src="Mental001.JPEG" alt="Mental Health">
                    <img src="Mental002.JPEG" alt="Mental Health">
                    <img src="Mental003.JPEG" alt="Mental Health">
                    <img src="Mental004.JPEG" alt="Mental Health">
                    <img src="Mental005.JPEG" alt="Mental Health">
                    <img src="Mental006.JPEG" alt="Mental Health">
                    <img src="Mental007.JPEG" alt="Mental Health">
                    <img src="Mental008.JPEG" alt="Mental Health">
                    <img src="Mental009.JPEG" alt="Mental Health">
                    <img src="Mental010.JPEG" alt="Mental Health">
                    <img src="Mental012.JPEG" alt="Mental Health">
                </div>
            </section>

            <section class="history-section">
                <h2>Our History</h2>
                <p>The World Mental Health Support project was born out of a desire to provide accessible and free mental health services to individuals worldwide. It was created in 2024 by three passionate students from the International University of Management (IUM) – Urania, Alan, and Elizeth...</p>
                <p>Today, the platform continues to grow, with hundreds of users joining the community...</p>
            </section>

            <!-- YouTube Links Section -->

            <section class="youtube-links">
                <iframe src="https://www.youtube.com/watch?v=HGPF0KGl3gU" title="Mental Health Awareness Video 1"></iframe>
                <iframe src="https://www.youtube.com/watch?v=DxIDKZHW3-E&pp=ygUYTWVudGFsIGhlYWx0aCBpbXBvcnRhbmNl" title="Mental Health Importance Video 2"></iframe>
            </section>

            <!-- External Resources -->
            <section class="external-links">
                <h3>Learn More About Mental Health Support</h3>
                <a href="https://www.mentalhealth.gov" target="_blank">Mental Health Government Resources</a>
                <a href="https://www.who.int/news-room/fact-sheets/detail/mental-health-strengthening-our-response" target="_blank">World Health Organization - Mental Health</a>
                <a href="https://www.nami.org/Home" target="_blank">National Alliance on Mental Illness</a>
            </section>

        </section>
    </div>

    <footer>
        <p>&copy; 2024 World Mental Health Support. All rights reserved.</p>
    </footer>

</body>

</html>


