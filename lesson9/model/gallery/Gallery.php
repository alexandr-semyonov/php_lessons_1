<?php


namespace Model\Gallery;

use model\Db;

class Gallery
{
  protected $data = [];

  public function __construct()
  {
    $db = new Db();
    $sql = 'SELECT * FROM gallery';
    $data = $db->query($sql);
    foreach ($data as $picture) {
      $this->data[] = new
    }
    
    //$this->imageLinks = scandir( __DIR__ . '/../../img', SCANDIR_SORT_NONE );
  }

  public function getImageLinks()
  {
    return $this->imageLinks;
  }
}