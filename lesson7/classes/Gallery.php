<?php


class Gallery
{
  protected $imageLinks;

  public function __construct()
  {
    $this->imageLinks = scandir( __DIR__ . '/../img', SCANDIR_SORT_NONE );
  }

  public function getImageLinks()
  {
    return $this->imageLinks;
  }
}