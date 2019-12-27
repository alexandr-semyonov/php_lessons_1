<?php


namespace View\App;


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
  public function display(string $template){
    echo $this->render($template);
    return $this;
  }

  public function render(string $template){
    ob_start();
    $data = $this->data;
    include __DIR__ . '/../templates/common/header.php';
    include $template;
    include __DIR__ . '/../templates/common/footer.php';
    $res = ob_get_clean();
    return $res;
  }
}