<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- Success Message Placeholder -->
        <div class="success" id="successMessage" style="display: none;">
            <p>Successfully logged in!</p>
        </div>

        <!-- Error Message Placeholder -->
        <div class="error" id="errorMessage" style="display: none;">
            <ul>
                <li>Invalid email or password!</li>
            </ul>
        </div>

        <!-- Login Form -->
        <form id="loginForm" action="/login" method="POST">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>
       <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the form submission for demonstration

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (email === "sshelke2001@gmail.com" && password === "1234567") {
            // Show success message
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('errorMessage').style.display = 'none';
            
            // Redirect to another page
            setTimeout(function() {
                window.location.href = '/upload';  // Replace with your desired URL
            }, 2000);  // Delay for 2 seconds before redirecting
        } else {
            // Show error message
            document.getElementById('errorMessage').style.display = 'block';
            document.getElementById('successMessage').style.display = 'none';
        }
    });
</script>

    </script>
</body>
</html>
