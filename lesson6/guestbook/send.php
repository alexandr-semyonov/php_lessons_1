<?php

require_once __DIR__ . '/Classes/GuestBook.php';

$path = __DIR__ . '/data.txt';
$guestBook = new GuestBook($path);

$guestBook->append($_POST['guestBookRecord'])->save();

header('Location: .');