<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gender of name</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/functions.php';
    
    echo getGenderOfName('Angel');
    echo '<br>';
    echo getGenderOfName('Mike');
    echo '<br>';
    echo getGenderOfName('angel');
    echo '<br>';
    echo getGenderOfName('Alex');


    ?>
</body>
</html>