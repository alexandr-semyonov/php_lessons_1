<?php

require __DIR__ . '/autoload.php';

$view = new \View\App\View();
$mainPage = new \Model\mainPage\MainPage();



$view->assign('mainPage', $mainPage, 'About myself')->display(__DIR__ . '/view/templates/index.php');