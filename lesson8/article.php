
<?php
  require __DIR__ . '/classes/Db.php';
  require __DIR__ . '/classes/View.php';

  if (!isset($_GET['id'])){
    die('Ошибка вывода статьи');
  }

  $db = new DB();
  $sql = 'SELECT * FROM news WHERE id=:id';
  $data = [
    ':id' => (int)$_GET['id'],

    ];

  $records = $db->query($sql, $data);
  if (empty($records)){
    die('Ошибка вывода статьи');
  }
  $view = new View();


  $view->assign('article', array_shift($db->query($sql, $data)))->display('article');