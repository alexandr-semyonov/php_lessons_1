<?php

require_once __DIR__ . '/GuestBookRecord.php';

class TextFile
{

  public function __construct()
  {
    $fh = fopen(__DIR__ . '/../data.txt', 'r');
    $i = 0;
    while( !feof($fh) ){
      $line[$i] = fgets($fh);
      $line[$i] = str_replace (["\r\n", "\n", "\r"], '', $line[$i]);
      $data[] = new GuestBookRecord($line[$i]);
      $i++;
    }
    $this->data = $data;
    return $this;
  }

  public function save()
  {
    $lines = [];
    foreach ($this->data as $record){
      $lines[] = $record->getMessage();
    }
    return file_put_contents( __DIR__ . '/../data.txt', implode("\n", $lines));
  }
}