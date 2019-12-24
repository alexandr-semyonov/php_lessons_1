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

  <h1><?php echo $this->data['article']['заголовок']?></a></h1>
  <article><?php echo $this->data['article']['текст']?></article>
  <cite>Автор - <?php echo $this->data['article']['автор']?></cite>

</body>
</html>