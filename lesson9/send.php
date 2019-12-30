<?php

require __DIR__ . '/autoload.php';

$guestBook = new \model\guestbook\Book();

//var_dump($guestBook);
//var_dump($_POST['guestBookRecord']);die;

$guestBook->append($_POST['guestBookRecord']);

header('location: guestbook.php');
