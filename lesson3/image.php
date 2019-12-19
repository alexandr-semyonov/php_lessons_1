<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image.php</title>
  <style>
    .galleryimg {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>
  <a href="gallery.php"><===back</a>
  <hr>
  <?php 
    $images = [
      1 => 'https://picsum.photos/id/237/400/300',
      2 => 'https://picsum.photos/id/238/400/300',
      3 => 'https://picsum.photos/id/239/400/300',
      4 => 'https://picsum.photos/id/240/400/300',
    ];

    var_dump($_GET);
  ?>
  <br>
  <hr>
  <div class="galleryimg">
  <img src="<?php echo $images[$_GET['id']] ?>">  
  </div>
</body>
</html>