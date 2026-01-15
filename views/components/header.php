<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $pageTitle ?? "Emuārs" ?></title>
    <?php if(isset($customStyles)){ ?>
        <link rel="stylesheet" href="/css/<?=$customStyles ?>">
        <?php } ?>
</head>
<body>