<?php


namespace admin\model\guestbook;

use model\Db;
use model\guestbook\Record;

class Book
{
  protected $data;

  public function addRecord()
  {
    $db = new Db();
    $sql = 'INSERT guestbook ()  ';
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