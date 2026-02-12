<?php require "./views/components/header.php";?>
<?php require "./views/components/navbar.php";?>
    <h1>Rediģēt <?= $comment["autors"] ?> komentāru</h1>
    <form method="POST">

    <label>Komentārs
    <input name="coment" value ='<?=  htmlspecialchars($_POST['coment'] ?? $comment['coment'])?>'/>
    <input name="id" value = <?= htmlspecialchars($comment["comnt_id"]) ?> type = "hidden"/>
    </label>
    <?php if(isset($errors["coment"])){?>
     <p style="color:red;"><?=htmlspecialchars($errors["coment"])?></p>
    <?php } ?></br>

    <button>Saglabāt</button>
    </form>
<?php require "./views/components/footer.php";?>