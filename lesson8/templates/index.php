<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lesson8 - news</title>
</head>
<body>
    <?php foreach ($this->data['news'] as $record): ?>
    <h1><a href="article.php?id=<?php echo $record['id'] ?>"><?php echo $record['заголовок']?></a></h1>
    <article><?php echo $record['текст']?></article>
    <cite>Автор - <?php echo $record['автор']?></cite>
    <?php endforeach ?>
</body>
</html>
