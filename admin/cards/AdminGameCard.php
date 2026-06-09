<?php
require '../../config/db.php';
$stmt = $pdo->query("SELECT * FROM game ORDER BY id DESC");
while ($game = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <div class="card">
        <img class="cover" src="<?= htmlspecialchars($game['logo']) ?>" alt="Cover">
        <h3><?= htmlspecialchars($game['title']) ?></h3>
        <div class="AdminButtons">
            <a href="edit/editGame.php?id=<?= $game['id'] ?>" class="edit">Edit</a>
            <a href="delete/deleteGame.php?id=<?= $game['id'] ?>" class="delete">Delete</a>
        </div>
    </div>
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

    .AdminButtons {
        display: flex;
        place-content: center space-between;
    }

    .edit {
        border-style: outset;
        border-radius: 16px;
        border-width: 2px;
        border-color: darkgray;
        background-color: darkblue;
        color: white;
        text-decoration: none;
        padding: 6px;
        font-size: 16px;
    }

    .delete {
        border-style: outset;
        border-radius: 16px;
        border-width: 2px;
        border-color: darkgray;
        background-color: darkred;
        color: white;
        text-decoration: none;
        padding: 6px;
        font-size: 16px;
    }
</style>