<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body> 
  <form action="calc.php" method="get">
  <fieldset>
  <legend>Calculator</legend>
    Enter number 1<br>
  <input type="text" name="num1" id="" placeholder="<?php echo $a = $_GET['num1']??''; ?>"><br>
    Enter operation<br>
  <input type="text" name="operation" size="2" placeholder="<?php echo $operation = $_GET['operation']??''; ?>" id=""><br>
    Enter number 2<br>
  <input type="text" name="num2" placeholder="<?php echo $b = $_GET['num2']??''; ?>" id=""><br>
    Result<br>
  <input type="text" name="result" disabled value="<?php require_once __DIR__ . '/functions.php'; echo getCalc($a, $b, $operation); ?>" id=""><br><br>
  <button type="submit">GO!</button>
  <button href="calc.php?num1=&operation=F&num2=">Reset</button><br>
  </fieldset>
  </form>
</body>
</html>