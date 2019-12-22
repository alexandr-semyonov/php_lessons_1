<?php

require_once __DIR__ . '/TextFile.php';
require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook extends TextFile
{
  protected $data;

  public function getData()
  {
    return $this->data;
  }
  public function append($text)
  {
    $this->data[] = new GuestBookRecord($text);
    return $this;
  }
}