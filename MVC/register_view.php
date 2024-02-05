<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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

        p {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="register.php" method="post">
        <h2>Registration Form</h2>
        <?php if(isset($registrationError) && !empty($registrationError)): ?>
            <p><?php echo $registrationError; ?></p>
        <?php endif; ?>
        <label for="newUsername">Username:</label>
        <input type="text" name="newUsername" required>

        <label for="newPassword">Password:</label>
        <input type="password" name="newPassword" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="confirmPassword" required>

        <input type="submit" value="Register">
    </form>
</body>
</html>
