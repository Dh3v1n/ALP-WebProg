<?php
require '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM items WHERE id = ?";
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
    <title>Edit Item</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="content">
        <h1>Edit Item</h1>
        <form method="POST">
            <label>Nama Item:</label><br>
            <input type="text" class="txtInput" name="item_name" value="<?= htmlspecialchars($item['item_name']) ?>" required><br><br>
            
            <label>Deskripsi:</label><br>
            <textarea name="description" rows="5" required><?= htmlspecialchars($item['description']) ?></textarea><br><br>
            
            <label>URL Gambar:</label><br>
            <input type="text" class="txtInput" name="image_url" value="<?= htmlspecialchars($item['image_url']) ?>"><br><br>
            
            <button type="submit" class="loginBtn">Update</button>
        </form>
    </div>
</body>
</html>
