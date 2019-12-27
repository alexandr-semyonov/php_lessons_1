<?php

require __DIR__ . '/autoload.php';

$view = new \View\App\View();
$gallery = new \Model\Gallery\Gallery();

var_dump($gallery);

//$view->assign('gallery', $mainPage)->display(__DIR__ . '/view/templates/index.php');