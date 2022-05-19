<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
</head>
<body>

<a href="/index.php"><button>К новостям</button></a>

<h1><?php echo $article->tittle?></h1>
<div><?php echo $article->content; ?></div>
<a href="templates/admin/update.php?id=<?php echo $article->id; ?>">
    <button>Редактировать новость</button>
</a>

<form action="/index.php?delete=<?php echo $_GET['id']; ?>" method="post">
    <button type="submit" name="submit" value="delete">Удалить новость</button>
</form>

</body>
</html>
