<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table of True</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
    <?php
        echo 'Hello world!';
    ?>
    </h1>    
    <table class="table">
        <thead>
            <tr>
                <th colspan="3">Таблица истинности</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>a</td><td>b</td><td>a&&b</td>
            </tr>
            <tr>
                <td>0</td><td>0</td><td><?= (int)(0 && 0) ?></td>
            </tr>
            <tr>
                <td>0</td><td>1</td><td><?= (int)(0 && 1) ?></td>
            </tr>
            <tr>
                <td>1</td><td>0</td><td><?= (int)(1 && 0) ?></td>
            </tr>
            <tr>
                <td>1</td><td>1</td><td><?= (int)(1 && 1) ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>