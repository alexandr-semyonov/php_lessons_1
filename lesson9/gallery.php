<?php

require __DIR__ . '/autoload.php';

$view = new \View\App\View();
$gallery = new \Model\Gallery\Gallery();


$view->assign('gallery', $gallery)->display(__DIR__ . '/view/templates/gallery.php');