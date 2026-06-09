<?php
require '../../config/db.php';

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $desc = $_POST['description'];
    $publisher = $_POST['publisher'];
    $dev = $_POST['developer'];
    $logo = $_POST['logo'];

    $stmt = $pdo->prepare("INSERT INTO game (title, genre, description, publisher, developer, logo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $genre, $desc, $publisher, $dev, $logo]);
    
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Game</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="content">
        <div class="addGame">
            <div>
                <h1>Add Game</h1>
                <form method="POST">
                    <label for="title">Game Title</label><br>
                    <input class="txtInput" type="text" id="title" name="title" value="" required><br>
                    <label for="logo">Game Cover</label><br>
                    <input type="file" id="logo" name="logo" accept="image?*"><br>
                    <label for="desc">Game Description</label><br>
                    <textarea class="txtInput" id="desc" name="desc" value="" rows="5" required></textarea><br>
                    <label for="publisher">Publisher</label><br>
                    <input class="txtInput" type="text" id="publisher" name="publisher" value="" required><br>
                    <label for="dev">Developer</label><br>
                    <input class="txtInput" type="text" id="dev" name="dev" value="" required><br>
                    <label for="genre">Game Genre</label><br>
                    <select id="genre" name="genre" required>
                        <option value="Arcade Shooter">Arcade Shooter</option>
                        <option value="Tactical Shooter">Tactical Shooter</option>
                        <option value="Survival">Survival</option>
                        <option value="Horror">Horror</option>
                    </select>
                    <br>
                    <button name="save" class="addBtn" type="submit">Save Game</button>
                </form>
            </div>
        </div>
        <a class="back" href="../admin.php">Back</a>
    </div>
</body>

</html>