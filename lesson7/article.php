<?php
require_once __DIR__ . './Classes/News.php';
require_once __DIR__ . './Classes/View.php';

$article = new News();
$view = new View();

$view->assign('article', $article)->display('article');