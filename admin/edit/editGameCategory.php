<?php
require '../../config/db.php';

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
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <nav class="navbar"></nav>
    <div class="content">
        <div class="addGame">
            <div>
                <form method="POST">
                <label>Category Name</label><br>
                <input type="text" class="txtInput" name="item_name" required><br><br>

                <label>Category Description</label><br>
                <textarea class="txtInput" name="description" rows="5" required></textarea><br><br>

                <label>Icon</label><br>
                <input type="text" class="txtInput" name="image_url"><br><br>

                <button type="submit" class="loginBtn">Save</button>
            </form>
            </div>
        </div>
        <h1 class="gameTitle"></h1>
        <div class="gameItemCategories">
            <div>
                <div class="category">
                    <img src="img/icon.png">
                    <h3>Item name</h3>
                    <div class="AdminButtons">
                        <a href="editGame.php" class="edit">Edit</a>
                        <a href="delete.php" class="delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="back" href="../admin.php">Back</a>
        <script src="script/GameNav.js"></script>
</body>

</html>