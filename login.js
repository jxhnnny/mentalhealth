document.getElementById('loginForm').addEventListener('submit', async function (event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    try {
        const response = await fetch('http://localhost/authenticate.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, password }),
        });
        if (!response.ok) {
            throw new Error('Login failed');
        }
        const result = await response.json();

        if (result.success) {
            document.getElementById('success').innerText = result.message;
            document.getElementById('error').innerText = '';
            // Redirect to profile or dashboard page
            setTimeout(() => {
                window.location.href = '/profile.html';
            }, 2000);
        } else {
            document.getElementById('error').innerText = result.message;
            document.getElementById('success').innerText = '';
        }
    } catch (error) {
        document.getElementById('error').innerText = 'Error connecting to the server.';
        console.error('Error:', error);
    }
});
