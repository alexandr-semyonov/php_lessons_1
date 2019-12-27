
<div class="row">
  <div class="col">
    <ul>
      <?php

      foreach ($this->data['gallery']->getData() as $picture) {
       
          echo '<li><img src="img/' .  $picture->getImageName() . '" alt="' . $picture->getImageAlt() . '"></li>' . PHP_EOL;
        
      }
      ?>
    </ul>
  </div>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data" class="col">
  <input type="file" name="galleryImage">
  <button type="submit">Post image =)</button>
</form>