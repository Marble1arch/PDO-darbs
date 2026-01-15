<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</ul>
<h1>Emuārs</h1>
    <form>
    <input name='search_query' />
    <button>Meklēt</button>
    </form>
    <ul>
        <?php foreach($categories as $categorie) { ?>
            <li> <?= $categorie["category_name"] ?></li>
       <?php } ?>
    </ul>
</body>
</html>