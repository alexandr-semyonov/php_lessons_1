<?php


class Db
{
  protected $dbh;

  public function __construct()
  {
    $config = require __DIR__ . '/../config.php';
    $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
    $this->dbh = new PDO($dsn, $config['user'], $config['password']);
  }

  /*Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение*/
  public function execute(string $sql, array $data = []){
    $sth = $this->dbh->prepare($sql);
    return $sth->execute($data);
  }
  /*Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось*/
  public function query(string $sql, array $data = []){
    $sth = $this->dbh->prepare($sql);
    if(!$sth->execute($data)){
      return false;
    } else {
      return $sth->fetchAll();
    }
  }
}