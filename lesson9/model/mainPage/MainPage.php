<?php


namespace Model\mainPage;



class MainPage
{
  protected $title;
  protected $image;
  protected $text;
  protected $author;


  public function __construct()
  {
    $db = new \model\Db();
    $sql = 'SELECT * FROM maintext';
    $data = array_shift($db->query($sql));
    $this->title = $data['title'];
    $this->image = $data['mainPhoto'];
    $this->text = $data['mainText'];
    $this->author = $data['author'];
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getText()
  {
    return $this->text;
  }

  public function getAuthor()
  {
    return $this->author;
  }
}