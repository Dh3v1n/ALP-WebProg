<div class="card">
    <img class="cover" src="img/AVeryCrappyEditIMadeCauseWhyNot.png">
    <h3>Title</h3>
    <div class="AdminButtons">
        <a href="editGame.php" class="edit">Edit</a>
        <a href="deleteGame.php" class="delete">Delete</a>
    </div>
</div>

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