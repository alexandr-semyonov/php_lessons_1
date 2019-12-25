<?php

require __DIR__ . '/autoload.php';

$view = new \View\App\View();
$mainPage = new \Model\Main\MainPage();


//var_dump($mainPage->dataMain);

$view->assign('main', $mainPage)->display(__DIR__ . '/view/templates/index.php');