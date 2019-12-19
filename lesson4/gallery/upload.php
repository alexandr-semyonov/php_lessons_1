<?php
require_once __DIR__ . '/functions.php';

$path = __DIR__ . '/img/';

if ( isset($_FILES['galleryImage']) ) {
  if (0 == $_FILES['galleryImage']['error']) {
    $fullPath = getRandomName ($path);
    move_uploaded_file( $_FILES['galleryImage']['tmp_name'], $fullPath );
  }
}

header ('location: .');