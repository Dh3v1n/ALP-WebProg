<?php
require '../../config/db.php';

// 1. Ambil data game berdasarkan ID yang dikirim dari link
$game = null;
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM game WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
}

// 2. Jika tombol "Update Data" ditekan
if (isset($_POST['update'])) {
    $sql = "UPDATE game SET title=?, genre=?, description=?, publisher=?, developer=?, logo=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['title'], 
        $_POST['genre'], 
        $_POST['desc'], 
        $_POST['publisher'], 
        $_POST['dev'], 
        $_POST['logo'], 
        $_GET['id']
    ]);
    header("Location: ../admin.php");
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
                    <label for="title">Game Title</label><br>
                    <input class="txtInput" type="text" id="title" name="title" value="<?= htmlspecialchars($game['title']) ?>" required><br>
                    <label for="cover">Game Cover</label><br>
                    <input type="file" id="cover" name="cover" accept="image?*"><br>
                    <label for="desc">Game Description</label><br>
                    <textarea class="txtInput" id="desc" name="desc" value="" rows="5" required><?= htmlspecialchars($game['description']) ?></textarea><br>
                    <label for="publisher">Publisher</label><br>
                    <input class="txtInput" type="text" id="publisher" name="publisher" value="<?= htmlspecialchars($game['publisher']) ?>" required><br>
                    <label for="dev">Developer</label><br>
                    <input class="txtInput" type="text" id="dev" name="dev" value="<?= htmlspecialchars($game['developer']) ?>" required><br>
                    <label for="genre">Game Genre</label><br>
                    <select id="genre" name="genre">
                        <option value="Arcade Shooter" <?= $game['genre']=='Arcade Shooter'?'selected':'' ?>>Arcade Shooter</option>
                        <option value="Tactical Shooter" <?= $game['genre']=='Tactical Shooter'?'selected':'' ?>>Tactical Shooter</option>
                        <option value="Survival" <?= $game['genre']=='Survival'?'selected':'' ?>>Survival</option>
                        <option value="Horror" <?= $game['genre']=='Horror'?'selected':'' ?>>Horror</option>
                    </select>
                    <br>
                    <button name="save" class="addBtn" type="submit">Save Game</button>
                </form>
            </div>
        </div>
        <h1 class="gameTitle"><?= htmlspecialchars($game['title']) ?></h1>
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
        <a class="back" href="../admin.php">Back</a>
        <script src="script/GameNav.js"></script>
</body>

</html>