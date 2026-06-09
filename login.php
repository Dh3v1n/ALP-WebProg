<?php
require 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="content">
        <div class="login">
            <div>
                <h1>Log In</h1>
                <form action="admin/confirmation.php" method="post">
                    <label for="name">Username</label><br>
                    <input class="txtInput" type="text" id="name" name="name" value=""><br>
                    <label for="pass">Password</label><br>
                    <input class="txtInput" type="password" id="pass" name="pass"><br>
                    <button type="submit" name="loginAdmin" class="loginBtn">Log In</button>
                </form>
            </div>
        </div>
        <a class="back" href="index.php">Back</a>
    </div>
</body>

</html>
