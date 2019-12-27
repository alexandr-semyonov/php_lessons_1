<?php


namespace Model\Gallery;


class GalleryImage
{
  protected $imageName;
  protected $imageAlt;

  public function __construct($picture) {
    $this->imageName = $picture['pictureName'];
    $this->imageAlt = $picture['pictureAlt'];
  }

  public function getImageName(){
    return $this->imageName;
  }

  public function getImageAlt(){
    return $this->imageAlt;
  }
}