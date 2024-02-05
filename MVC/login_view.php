<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .welcome-container {
            text-align: center;
            margin-top: 20px;
        }

        .welcome-message {
            font-size: 24px;
            color: #4caf50;
            margin-bottom: 10px;
            border: 2px solid #4caf50;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8f8f8;
        }

        .user-name {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <?php if(isset($userInfo)): ?>
        <div class="welcome-container">
            <div class="welcome-message">Login successful! Welcome, <span class="user-name"><?php echo $userInfo['username']; ?></span>!</div>
        </div>
    <?php else: ?>
        <form action="index.php" method="post">
            <h2>Login Form</h2>
            <?php if(isset($error) && !empty($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
            
            <!-- Add a "Register" button -->
            <a href="register_view.php"><button type="button">Register</button></a>
        </form>
    <?php endif; ?>
</body>
</html>
