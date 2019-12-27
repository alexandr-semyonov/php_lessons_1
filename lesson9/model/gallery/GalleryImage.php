<?php


namespace Model\Gallery;


class GalleryImage
{
  protected $imageName;
  protected $imageAlt;

  public function getImageName(){
    return $this->imageName;
  }

  public function getImageAlt(){
    return $this->imageAlt;
  }
}