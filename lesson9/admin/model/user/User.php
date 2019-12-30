<?php


namespace admin\model\user;


class User
{
  protected $id;
  protected $login;
  protected $password;

  public function __construct( $id, $login, $password)
  {
    $this->id = $id;
    $this->login = $login;
    $this->password = $password;
  }

  public function getLogin()
  {
    return $this->login;    
  }

  public function getPassword()
  {
    return $this->password;    
  }

}