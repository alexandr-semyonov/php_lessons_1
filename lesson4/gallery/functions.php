<?php

function getRandomName ($path){  
  $extension = strtolower(substr(strrchr($_FILES['galleryImage']['name'], '.'), 1));;
  do {
    $name = md5(microtime() . rand(0, 9999));
    $file = $path . $name . '.' . $extension;
  } while (file_exists($file));
  return $file;
}