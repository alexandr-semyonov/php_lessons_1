<?php

function __autoload ($className){
  require __DIR__ . '/' . strtolower(str_replace('\\', '/',$className)) . '.php';
}