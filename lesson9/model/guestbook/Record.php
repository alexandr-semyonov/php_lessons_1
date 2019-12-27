<?php


namespace model\guestbook;


class Record
{
  protected $id;
  protected $message;

  public function __construct($record)
  {
   $this->id = $record['id'];
   $this->message = $record['records'];
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function getId()
  {
    return $this->id;
  }
}