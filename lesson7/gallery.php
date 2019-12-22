<?php
    require_once __DIR__ . '/classes/Gallery.php';
    require_once __DIR__ . '/classes/View.php';

    $gallery = new Gallery();
    $view = new View();

    $view->assign('gallery', $gallery->getImageLinks())->display('gallery');