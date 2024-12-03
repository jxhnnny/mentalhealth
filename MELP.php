<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support Platform - Profiles</title>
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

        .profiles-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .profile-card {
            background-color: #d6f5f5; /* Light sea blue */
            width: 200px;
            height: 200px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-card h3 {
            margin: 5px 0;
            font-size: 16px;
        }

        .profile-card button {
            border: none;
            padding: 8px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .add-friend-btn {
            background-color: #4CAF50;
            color: white;
            box-shadow: 0 0 10px #4CAF50;
        }

        .add-friend-btn:hover {
            background-color: #45a049;
        }

        .delete-friend-btn {
            background-color: #FF3B3B;
            color: white;
            box-shadow: 0 0 10px #FF3B3B;
        }

        .delete-friend-btn:hover {
            background-color: #E63939;
        }

        .friend-list {
            margin-top: 20px;
        }

        .friend-list ul {
            list-style-type: none;
            padding: 0;
        }

        .friend-list li {
            font-size: 16px;
            margin: 5px 0;
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
        <header>
            <h1>World Mental Health Support</h1>
            
            
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


    
<div>
                <h2>Your Friends List</h2>
</div>
        
        <div class="profiles-container">
            <!-- First Row -->

            <
            <div class="profile-card" data-username="Urania">
                <img src="Ulania.jpg" alt="Urania">
                <h3>Urania</h3>
                <button class="add-friend-btn" onclick="addFriend('Urania')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('Urania')">Delete Friend</button>
            </div>

            <div class="profile-card" data-username="Alan">
                <img src="Alan.jpg" alt="Alan">
                <h3>Alan</h3>
                <button class="add-friend-btn" onclick="addFriend('Alan')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('Alan')">Delete Friend</button>
            </div>

            <div class="profile-card" data-username="Elizeth">
                <img src="Elizeth.jpg" alt="Elizeth">
                <h3>Elizeth</h3>
                <button class="add-friend-btn" onclick="addFriend('Elizeth')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('Elizeth')">Delete Friend</button>
            </div>

            <!-- Second Row -->
            <div class="profile-card" data-username="John">
                <img src="John.jpg" alt="John">
                <h3>John</h3>
                <button class="add-friend-btn" onclick="addFriend('John')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('John')">Delete Friend</button>
            </div>

            <div class="profile-card" data-username="Maria">
                <img src="Maria.jpg" alt="Maria">
                <h3>Maria</h3>
                <button class="add-friend-btn" onclick="addFriend('Maria')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('Maria')">Delete Friend</button>
            </div>

            <div class="profile-card" data-username="Chris">
                <img src="Chris.jpg" alt="Chris">
                <h3>Chris</h3>
                <button class="add-friend-btn" onclick="addFriend('Chris')">Add Friend</button>
                <button class="delete-friend-btn" onclick="deleteFriend('Chris')">Delete Friend</button>
            </div>
        </div>

    </div>

    <script>
        let friends = [];

        function addFriend(username) {
            if (!friends.includes(username)) {
                friends.push(username);
                updateFriendList();
            } else {
                alert(`${username} is already your friend.`);
            }
        }

        function deleteFriend(username) {
            const index = friends.indexOf(username);
            if (index > -1) {
                friends.splice(index, 1);
                updateFriendList();
            } else {
                alert(`${username} is not in your friend list.`);
            }
        }

        function updateFriendList() {
            const friendList = document.getElementById('friendList');
            friendList.innerHTML = '';
            friends.forEach(friend => {
                const listItem = document.createElement('li');
                listItem.textContent = friend;
                friendList.appendChild(listItem);
            });
        }
    </script>
</body>

</html>
