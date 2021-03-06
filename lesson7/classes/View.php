<?php


class View
{
  protected $data = [];

  /*задача - сохранить данные, передаваемые в шаблон
  по заданному имени (используйте защищенное свойство
  - массив для хранения этих данных)*/
  public function assign($name, $value){
    $this->data[$name] = $value;
    return $this;
  }

  //отображает указанный шаблон с заранее сохраненными данными
  public function display($template){
    echo $this->render($template);
    return $this;
  }

  public function render($template){
    ob_start();
    $data = $this->data[$template];
    require_once __DIR__ . '/../templates/' . $template . '.php';
    $res = ob_get_clean();
    return $res;
  }
}