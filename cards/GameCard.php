<?php
require '../config/db.php';
$stmt = $pdo->query("SELECT * FROM game ORDER BY id DESC");
while ($game = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <a href="gameHome.php?id=<?= $game['id'] ?>" class="card">
        <img class="cover" src="<?= htmlspecialchars($game['logo']) ?>" alt="Cover">
        <h3><?= htmlspecialchars($game['title']) ?></h3>
    </a>
<?php } ?>

<style>
    .card {
        background-color: orange;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
    }

    .cover {
        margin-top: 4px;
        max-width: 180px;
        max-height: 240px;
        border-radius: 4px;
    }
</style>