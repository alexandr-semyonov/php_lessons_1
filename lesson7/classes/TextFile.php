<?php


class TextFile
{

  public function __construct()
  {
    $fh = fopen(__DIR__ . '/../data.txt', 'r');
    $i = 0;
    while( !feof($fh) ){
      $lines[$i] = fgets($fh);
      $lines[$i] = str_replace (["\r\n", "\n", "\r"], '', $lines[$i]);
      $i++;
    }
    $this->data = $lines;
    return $this;
  }

  public function save()
  {
    return file_put_contents( __DIR__ . '/../data.txt', implode("\n", $this->data));
  }
}