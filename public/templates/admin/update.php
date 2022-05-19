<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить новость</title>
</head>
<body>

<a href="/index.php?id=<?php echo $_GET['id']; ?>"><button>Назад</button></a>

<form action="/index.php?edit=<?php echo $_GET['id']; ?>" method="post">
    <label for="tittle">Введите новое название статьи</label><br>
    <input type="text" name="tittle" id="tittle"><br>
    <label for="content">Введите новый текст статьи</label><br>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    <button type="submit" name="submit" value="update">Сохранить</button>
</form>

</body>
</html>