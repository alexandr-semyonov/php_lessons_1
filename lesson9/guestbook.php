<?php

require __DIR__ . '/autoload.php';

$view = new \View\App\View();
$guestbook = new \Model\Guestbook\Book();


$view->assign('guestbook', $guestbook, 'My guestbook')->display(__DIR__ . '/view/templates/guestbook.php');