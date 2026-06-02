<?php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['item_name'];
    $desc = $_POST['description'];
    $img = $_POST['image_url'];

    $sql = "INSERT INTO items (item_name, description, image_url) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $desc, $img]);

    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Item</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="content">
        <h1>Tambah Item Baru</h1>
        <form method="POST">
            <label>Nama Item:</label><br>
            <input type="text" class="txtInput" name="item_name" required><br><br>
            
            <label>Deskripsi:</label><br>
            <textarea name="description" rows="5" required></textarea><br><br>
            
            <label>URL Gambar (misal: img/icon.png):</label><br>
            <input type="text" class="txtInput" name="image_url"><br><br>
            
            <button type="submit" class="loginBtn">Simpan</button>
        </form>
    </div>
</body>
</html>
