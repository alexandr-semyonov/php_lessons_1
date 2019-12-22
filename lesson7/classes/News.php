<?php

require_once __DIR__ . '/Article.php';

class News
{
  protected $data = [];

  public function __construct()
  {
    $lines = file(__DIR__ . '/../news.txt', FILE_IGNORE_NEW_LINES);
    $articleId = 0;
    foreach ($lines as $line){
      $line = (explode('|', $line));
      $article = str_replace("\r\n", "", $line[1]);
      $articleHeader = $line[0];
      $articleId++;
      $this->data[] = new Article($articleId, $articleHeader, $article);
    }
  }

  public function getNews()
  {
    return $this->data;
  }
}