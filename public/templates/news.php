<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Последние новости</title>
</head>
<body>
<?php
    foreach ($news as $article) { ?>
        <a href="/index.php?id=<?php echo $article->id; ?>"><h3><?php echo $article->tittle; ?></h3></a>
<?php } ?>

<a href="templates/admin/insert.php">
    <button>Добавить новость</button>
</a>

</body>
</html>
