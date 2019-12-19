<?php

require_once __DIR__ . '/functions.php';

$path = __DIR__ . '/data.txt';
$data = $_POST['guestbookRecord'];

if($data !== ''){
  $guestbook = file($path, FILE_IGNORE_NEW_LINES);
  $guestbook[] = $data;
  file_put_contents( $path, implode("\n", $guestbook));
}
header('Location: index.php');