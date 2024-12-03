<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo{
          margin-left: 32px;
        }
        .logo p {
            font-weight: 700;
            font-size: 24px;
        }
        .login-button {
            background-color: #007BFF; /* Bootstrap primary color */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
        .login-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>

<header class="header">
    <div class="logo">
        <a href="index.php">
            <p>TluNews</p>
        </a>
    </div>
    <div>
        <a href="../admin/login.php" class="login-button">Login</a>
    </div>
</header>

</body>
</html>