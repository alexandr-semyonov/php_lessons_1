<?php


class TextFile
{
  protected $path;

  public function __construct($path)
  {
    $fh = fopen($path, 'r');
    $this->path = $path;
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
    return file_put_contents( $this->path, implode("\n", $this->data));
  }
}