<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Guestbook</title>
</head>
<body>

<ul>
  <?php foreach ( $data as $record ): ?>
    <li><?php echo $record->getMessage() ?></li>
  <?php endforeach; ?>
</ul>
<form action="send.php" method="post">
  <input type="text" name="guestBookRecord" id="">
  <br>
  <br>
  <button type="submit">Send Record</button>
</form>
</body>
</html>