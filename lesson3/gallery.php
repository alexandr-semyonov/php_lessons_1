<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery</title>
  <style>
    img {
      margin: 10px;
    }  
    .images{
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>
    <div class="images">    
  <?php
     $images = [
      1 => 'https://picsum.photos/id/237/200/150',
      2 => 'https://picsum.photos/id/238/200/150',
      3 => 'https://picsum.photos/id/239/200/150',
      4 => 'https://picsum.photos/id/240/200/150',
    ];
    foreach ($images as $id => $image){
      echo '<a href="image.php?id=' . $id .'"><img src=' . $image . '></a>';
    }  
  ?>
  </div>
</body>
</html>