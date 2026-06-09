<?php
require 'config/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM game WHERE id = ?");
$stmt->execute([$id]);
$game = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $game['title'] ?> - Home</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar"></nav>
    <div class="content">
        <div class="gameLogo">
            <img src="<?= htmlspecialchars($game['logo']) ?>">
        </div>
        <div class="gameItemCategories">
            <div>
                <h1><?= htmlspecialchars($game['title']) ?></h1>
                <p>Published By: <?= htmlspecialchars($game['publisher']) ?></p>
                <p>Developed By: <?= htmlspecialchars($game['developer']) ?></p>
                <h3>Description</h3>
                <p><?= nl2br(htmlspecialchars($game['description'])) ?></p>
                <h2>Categories</h2>
                <a class="category">
                    <img src="img/icon.png">
                    <h3>Category</h3>
                </a>
            </div>
        </div>
    </div>
    <script src="script/GameNav.js"></script>
</body>

</html>