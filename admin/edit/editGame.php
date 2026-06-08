<?php
require '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM games WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$item = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['item_name'];
    $desc = $_POST['description'];
    $img = $_POST['image_url'];

    $updateSql = "UPDATE items SET item_name = ?, description = ?, image_url = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$name, $desc, $img, $id]);

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Game</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar"></nav>
    <div class="content">
        <div class="addGame">
            <div>
                <form method="POST" action="controller/controller.php">
                    <label for="title">Game Title</label><br>
                    <input class="txtInput" type="text" id="title" name="title" value=""><br>
                    <label for="cover">Game Cover</label><br>
                    <input type="file" id="cover" name="cover" accept="image?*"><br>
                    <label for="desc">Game Description</label><br>
                    <input class="txtInput" type="text" id="desc" name="desc" value=""><br>
                    <label for="publisher">Publisher</label><br>
                    <input class="txtInput" type="text" id="publisher" name="publisher" value=""><br>
                    <label for="dev">Developer</label><br>
                    <input class="txtInput" type="text" id="dev" name="dev" value=""><br>
                    <label for="genre">Game Genre</label><br>
                    <select id="genre" name="genre">
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
        <h1 class="gameTitle"></h1>
        <div class="gameItemCategories">
            <div>
                <h2>Categories</h2>
                <div class="category">
                    <img src="img/icon.png">
                    <h3>Category</h3>
                    <div class="AdminButtons">
                        <a href="editGame.php" class="edit">Edit</a>
                        <a href="delete.php" class="delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="back" href="admin.php">Back</a>
        <script src="script/GameNav.js"></script>
</body>

</html>