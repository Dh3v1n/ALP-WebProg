<?php
require 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar"></nav>
    <div class="content">
        <div class="gameSelect">
            <div class="genre">
                <h2>Arcade Shooter</h2>
                <div class="gameCard"></div>
            </div>
            <div class="genre">
                <h2>Tactical Shooter</h2>
                <div class="gameCard"></div>
            </div>
            <div class="genre">
                <h2>Survival</h2>
                <div class="gameCard"></div>
            </div>
            <div class="genre">
                <h2>Survival Sandbox</h2>
                <div class="gameCard"></div>
            </div>
            <div class="genre">
                <h2>Horror</h2>
                <div class="gameCard"></div>
            </div>
        </div>
    </div>
    <script src="script/HomeNav.js"></script>
</body>

</html>
