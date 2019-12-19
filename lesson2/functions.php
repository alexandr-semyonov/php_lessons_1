<?php

function findDiscriminant($a, $b, $c){
  return $b**2 - (4*$a*$c);
}

function getQuadraticSolution($a, $b, $c){
  $discriminant = findDiscriminant($a, $b, $c);
    $x[1] = (-($b) - sqrt($discriminant))/2*$a;
    $x[2] = (-($b) + sqrt($discriminant))/2*$a;
  return $x;
}

function showQuadraticsolution($a, $b, $c){
  $res = getQuadraticSolution($a, $b, $c);
  if ( is_nan($res[1])  || is_nan($res[2]) ){
    return 'D < 0 - уравнение имеет 2 мнимых корня (т.е. вещественных корней нет).';
  }
  elseif ($res[1] === $res[2]){
    return 'x = ' . $res[1];
  }
  else {
    return 'x1 = ' . $res[1] . ', x2 = ' . $res[2];
  }
}

/*************************/

function getGenderOfName ($name){
  switch ($name) {
      case ( 0 == strnatcasecmp ($name, 'Alex')): return ucfirst ($name) . ' - is a Man'; break;
      case ( 0 == strnatcasecmp ($name, 'mike')): return ucfirst ($name) . ' - is a Man'; break;
      case ( 0 == strnatcasecmp ($name, 'Angel')): return ucfirst ($name) . ' - is a woman'; break;
      default : return ucfirst ($name) . ' - is a woman';        
  }
}

assert (  'Mike - is a Man' == getGenderOfName ('Mike') );
assert (  'Mike - is a woman' !== getGenderOfName ('mike') );
assert (  'Mike - is woman' !== getGenderOfName ('Mike') );
assert (  'Angel - is a woman' == getGenderOfName ('angel') );
assert (  'Maria - is a woman' == getGenderOfName ('Maria') );