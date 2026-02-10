
<?php require "./views/components/header.php";?>
<?php require "./views/components/navbar.php";?>
    <h1><?= htmlspecialchars($post["category_name"]) ?></h1>
    <a href="edit-cat?id=<?= $post["id"] ?>">Rediģēt ierakstu</a>

    <form action="/delete-cat" method="POST">
    <input name="id" value = <?= htmlspecialchars($post["id"]) ?> type = "hidden"/>
        <button>Delete</button>
    </form>
<?php require "./views/components/footer.php";?>