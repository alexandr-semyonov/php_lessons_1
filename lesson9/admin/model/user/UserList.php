<?php


namespace admin\model\user;

use model\Db;

class UserList
{
  protected $userList;

  public function __construct()
  {
    $db = new Db;
    $sql = 'SELECT * FROM users';
    $data = $db->query($sql);
    foreach ($data as $user) {
      $this->userList = new User( $user['id'], $user['login'], $user['password']);
    }
  }

}