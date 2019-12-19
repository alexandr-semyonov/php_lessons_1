<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Guestook</title>
</head>
<body>
  <?php
  require_once __DIR__ . '/functions.php';
  $path = __DIR__ . '/data.txt';
  $guestbook = getArrOfRecords($path);
  ?>
  <ul>
    <?php foreach ( $guestbook as $record ): ?>
    <li><?php echo $record ?></li>    
    <?php endforeach; ?>
  </ul>
  <form action="send.php" method="post">
    <input type="text" name="guestbookRecord" id="">
    <br>
    <br>
    <button type="submit">Send Record</button>
  </form>
</body>
</html>