<?php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['item_name'];
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
    <title>Admin - Add Game Category</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="content">
        <div class="addGame">
            <h1>Add Item</h1>
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

</body>

</html>