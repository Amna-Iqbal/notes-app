<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Notes App</title>
    <style>
        /* General Styles */
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Arial', sans-serif;
            background: #c8d9f0; /* Light pastel background */
            margin: 0;
        }

        /* Card Style */
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: ##324e66; 
            margin-bottom: 20px;
        }

        /* Button Styles */
        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .buttons a {
            text-decoration: none;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
        }

        .btn-login {
            background: #324e66;
            color:rgb(245, 247, 250);
            border: none;
        }

        .btn-register {
            background: #c8d9f0;
            color: #324e66;
            border: none;
        }

        .buttons a:hover {
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Notes App</h1>
        <p>Organize your thoughts and ideas in one place.</p>
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-register">Register</a>
        </div>
    </div>
</body>
</html>
