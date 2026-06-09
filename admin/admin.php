<?php
require '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar"></nav>
    <div class="content">
        <a class="addGame" href="add/addGame.php">Add Game</a>
        <div class="gameSelect">
            <div class="gameCard"></div>
        </div>
    </div>
    <script src="script/AdminHomeNav.js"></script>
</body>

</html>