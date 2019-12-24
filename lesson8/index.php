<?php

require_once __DIR__ . '/classes/Db.php';
require_once __DIR__ . '/classes/View.php';


$db = new Db();
$sql = 'SELECT * FROM news ORDER BY id DESC';



$view = new View();
$view->assign('news', $db->query($sql))->display('index');