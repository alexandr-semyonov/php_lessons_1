<?php

require_once __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook();

$guestBook->append($_POST['guestBookRecord'])->save();

header('Location: guestbook.php');