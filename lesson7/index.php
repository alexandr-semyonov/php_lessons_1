<?php
require_once __DIR__ . './Classes/News.php';
require_once __DIR__ . './Classes/View.php';

$news = new News();
$view = new View();

$view->assign('news', $news)->display('news');