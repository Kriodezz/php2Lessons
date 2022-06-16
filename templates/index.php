<!-- Шаблон, созданный на уроке -->
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach ($this->products as $product) : ?>
<section>
    <h1>
        <a href="/ProductController/One/?id=<?php echo $product->id; ?>">
            <?php echo $product->tittle; ?>
        </a>
    </h1>
    <article><?php echo $product->description; ?></article>
    <p><?php echo $product->price; ?></p>
</section>
<hr>
<?php endforeach; ?>

</body>
</html>
