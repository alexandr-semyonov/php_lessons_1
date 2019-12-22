<?php


class Uploader

{
  private $fieldName;

  public function __construct($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  public function isUploaded(){
    return (isset($_FILES[$this->fieldName]) && (0 == $_FILES[$this->fieldName]['error']));
  }

  public function getRandomName (){
    $extension = strtolower(substr(strrchr($_FILES[$this->fieldName]['name'], '.'), 1));;
    do {
      $name = md5(microtime() . rand(0, 9999));
      $fileName =  $name . '.' . $extension;
    } while (file_exists($fileName));
    return $fileName;
  }

  public function upload(){
    if ($this->isUploaded()){
      $fullPath = __DIR__ . '/../img/' . $this->getRandomName();
      move_uploaded_file( $_FILES[$this->fieldName]['tmp_name'], $fullPath );
    }
  }
}