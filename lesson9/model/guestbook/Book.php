<?php


namespace model\guestbook;


use model\Db;

class Book
{
  protected $data;

  public function __construct()
  {
    $db = new Db();
    $sql = 'SELECT * FROM guestbook ORDER BY id DESC ';
    $data = $db->query($sql);
    foreach ($data as $record){
      $this->data[] = new Record($record);
    }
  }

  public function getData()
  {
    return $this->data;
  }
}