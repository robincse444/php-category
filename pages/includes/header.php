<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">Prothom-Alo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=all-news" class="nav-link">All-News</a></li>


            <?php foreach ($newspapers as $newspaper) { ?>
            <li class="nav-item"><a href="action.php?pages=newspaper-newspapers&&news_id=<?php echo $newspaper['id'] ?>" class="nav-link"><?php echo $newspaper['name'] ?></a></li>
            <?php } ?>
        </ul>

    </div>

</nav>
