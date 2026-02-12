<?php require "./views/components/header.php";?>
<?php require "./views/components/navbar.php";?>
    <h1><?= htmlspecialchars($post["content"] ?? '') ?></h1>
 
        <?php if (!empty($post["category_name"])): ?>
            <p><strong>Kategorija:</strong> <?= htmlspecialchars($post["category_name"]) ?></p>
        <?php endif; ?>
    
        <a href="edit?id=<?= $post["id"] ?>">Rediģēt ierakstu</a>
    <form action="/delete" method="POST">
    <input name="id" value = <?= htmlspecialchars($post["id"]) ?> type = "hidden"/>
        <button>Delete</button>
    </form>

            <?php if (!empty($comment["autors"])): ?>
                <p><?= "Autors: ".htmlspecialchars($comment["autors"])." ".htmlspecialchars($comment["datums"]).'</br>'."komentārs: ".htmlspecialchars($comment["coment"]) ?></p>
                <form action="/delete-com" method="POST">
                        <input name="id" value = <?= htmlspecialchars($post["id"]) ?> type = "hidden"/>
                    <button>Delete</button>
                </form>
                <form action="/edit-com" method="POST">
                <button ><a href="edit-com?id=<?= $comment["id"] ?>">Rediģēt</a></button>
                </form>
            <?php endif; ?>
    <form action= /create-com method="POST">
            <label>Autors:</label>
                <input name="autors" value="<?= $_POST["autors"] ?? ""?>" /> </br>
            <label>Komentārs:</label>
            <textarea name="coment" value="<?= $_POST["coment"] ?? ""?>" ></textarea></br>
                <input name="id" value = <?= htmlspecialchars($post["id"]) ?> type = "hidden"/>
            <button>Add comment</button>
    </form>
<?php require "./views/components/footer.php";?>