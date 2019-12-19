<?php
session_start();
require_once __DIR__ . '/functions.php';

$path = __DIR__ . '/img/';

if ( isset($_FILES['galleryImage']) ) {
  if (0 == $_FILES['galleryImage']['error']) {
    $filename = getRandomName ();
    move_uploaded_file( $_FILES['galleryImage']['tmp_name'], $path . $filename );
    makeRecordInLog( getCurrentUser(), 'upload', $filename);
  } else {
    makeRecordInLog( getCurrentUser(), 'uploadfail', $filename);
  }
}

header ('location: .');