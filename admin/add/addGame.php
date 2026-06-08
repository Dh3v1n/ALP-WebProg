<?php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['game_name'];
    $desc = $_POST['description'];
    $img = $_POST['image_url'];

    $sql = "INSERT INTO items (item_name, description, image_url) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $desc, $img]);

    header("Location: admin.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Game</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="content">
        <div class="addGame">
            <div>
                <h1>Add Game</h1>
                <form method="POST" action="controller/controller.php">
                    <label for="title">Game Title</label><br>
                    <input class="txtInput" type="text" id="title" name="title" value="" required><br>
                    <label for="cover">Game Cover</label><br>
                    <input type="file" id="cover" name="cover" accept="image?*"><br>
                    <label for="desc">Game Description</label><br>
                    <textarea class="txtInput" id="desc" name="desc" value="" rows="5" required></textarea><br>
                    <label for="publisher">Publisher</label><br>
                    <input class="txtInput" type="text" id="publisher" name="publisher" value="" required><br>
                    <label for="dev">Developer</label><br>
                    <input class="txtInput" type="text" id="dev" name="dev" value="" required><br>
                    <label for="genre">Game Genre</label><br>
                    <select id="genre" name="genre" required>
                        <option value="Arcade-Shooter">Arcade Shooter</option>
                        <option value="Tactical-Shooter">Tactical Shooter</option>
                        <option value="Survival">Survival</option>
                        <option value="Survival-Sandbox">Survival Sandbox</option>
                        <option value="Horror">Horror</option>
                    </select>
                    <br>
                    <button name="save" class="addBtn" type="submit">Save Game</button>
                </form>
            </div>
        </div>
        <a class="back" href="admin.php">Back</a>
    </div>
</body>

</html>