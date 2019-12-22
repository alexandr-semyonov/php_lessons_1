<?php

require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
  protected $data;

  public function getData()
  {
    return $this->data;
  }
  public function append($text)
  {
    $this->data[] = $text;
    return $this;
  }
}