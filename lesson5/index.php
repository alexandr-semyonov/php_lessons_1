<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
  h3{
    margin-top: 10px;
  }
  ul {
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: left;
    list-style: none;
  }
  li {
    margin: 10px ;
  }

  img{
    width: 300px;
  }
  </style>
</head>
<body class="container">
<div class="row">
  <div class="col">
    <?php
      if (isset($_SESSION['user'])){
        echo '<h3>Hello ' . $_SESSION['user'] . ' | <a href="logout.php">Exit</a><h3>';
      }  else {
        echo '<h3>If you want upload images you must <a href="login.php">Login</a></h3>';
      } 
    ?>     
  </div>
</div>
  <div class="row">
    <div class="col">
      <ul>
      <?php
        $imageLinks = scandir( __DIR__ . '/img', SCANDIR_SORT_NONE );
        foreach ($imageLinks as $link) {
            if ($link !== '.' && $link !== '..'){
              echo '<li><img src="img/' .  $link . '"></li>';
          }
        }
        ?>
      </ul>
    </div>
  </div>
  <?php if (isset($_SESSION['user'])) : ?>
    <hr>
  <form action="upload.php" method="post" enctype="multipart/form-data" class="col">
  <input type="file" name="galleryImage">
  <button type="submit">Post image =)</button>
  </form>
  <?php endif; ?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>