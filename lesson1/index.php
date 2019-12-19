<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lesson1</title>
</head>
<body>
<?php
$str = 'Hello world****';
?>

<h1><?php echo $str?></h1>
<p>"Hello! World!"</p>

<?php
    echo ($a = 2);
    echo "<br> $str - Variable <br>";
    $x = ($y = 12) - 8;
    echo $x;
    echo '<br>';
    $x = (true xor true);
    var_dump($x);
    echo '<br>';
    var_dump(true xor true);
?>
</body>
</html>