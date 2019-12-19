<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Discriminnant</title>
</head>
<body>
  <p> Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.</p>
  <code>
    Уравнение x<sup>2</sup> - 8x + 7 = 0
    <br>
    Его дискриминант 
    <?php require_once __DIR__ . '/functions.php'; echo findDiscriminant( 1, -8, 7); ?>
    <br>
    Решение уравнения <?= showQuadraticsolution( 1, -8, 7) ?>
  </code>
  <hr>
  <code>
    Уравнение 2x<sup>2</sup> + 4x + 2 = 0
    <br>
    Его дискриминант 
    <?php require_once __DIR__ . '/functions.php'; echo findDiscriminant( 2, 4, 2); ?>
    <br>
    Решение уравнения <?= showQuadraticsolution( 2, 4, 2) ?>
  </code>
  <hr>
  <code>
    Уравнение 2x<sup>2</sup> + 4x + 4 = 0
    <br>
    Его дискриминант 
    <?php require_once __DIR__ . '/functions.php'; echo findDiscriminant( 2, 4, 4); ?>
    <br>
    Решение уравнения <?= showQuadraticsolution( 2, 4, 4) ?>
  </code>
  <hr>
  <?php var_dump(sqrt(-2)); ?>
</body>
</html>