<?php session_start();?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Emuārs</h1>
    <form>
            <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
                <?php if(isset($_SESSION["delete"])){?>
                    <p><?=$_SESSION["delete"]?></p>
                <?php } 
                session_destroy();?>
            <button>Meklēt</button>
    </form>
        <?php if(count($categories)==0) { ?>
        <p>❌ Nav atrasts neviens ieraksts. 😭 Lūdzu, pamēģini citu vārdu vai frāzi 🐣</p>
    <?php } else {?>
    <ul>
       <?php foreach($categories as $categorie) { ?>
            <li><a href="show-cat?id=<?= $categorie["id"] ?>"><?= htmlspecialchars($categorie["category_name"])?></a></li>
       <?php } ?>
    </ul>
        <?php } ?>
        <?php require "views/components/footer.php";?>