<?php include('proses_login.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        h2 {
            text-align: center;
            color: darkgreen;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Media Queries */

        /* Laptop */
        @media(max-width: 1366px) {
            html {
                font-size: 75%;
            }
        }

        /* Tablet */
        @media(max-width: 768px) {
            html {
                font-size: 62.5%;
            }
        }

        /* Mobile */
        @media(max-width: 450px) {
            html {
                font-size: 55%;
            }
        }

        /* Media Queries End */
    </style>
</head>

<body>
    <form method="post" action="login.php">
        <div class="container">
            <h2>Login Admin</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="login">Login</button>
        </div>
    </form>

</body>

</html>