<?php

    include __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    foreach($dischi as $album) { ?>
        <div>
            <div><img src="<?= $album['poster'] ?>"/></div>
            <div><?= $album['title'] ?></div>
            <div><?= $album['author'] ?></div>
            <div><?= $album['year'] ?></div>
        </div>
        <?
    } ?>
</body>
</html>