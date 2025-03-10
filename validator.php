<?php 

class Validator {

  static function string($value, $min = 1, $max = INF) {
    $value = trim($value);

    $config = require('config.php');
    $db = new database($config['database']);
    $names = $db->query('SELECT name FROM names')->fetchAll();

    foreach ($names as $name) {
      foreach ($name as $n) {
        if (strtolower($n) === strtolower($value)) { return FALSE; }
      }}
    return strlen($value) >= $min && strlen($value) <= $max;
  }

  static function integer($value, $min = 1) {
    return $value >= $min;
  }

  static function decimal($value, $min = 1, $max = 100){
    if(preg_match('/^\d+(\W\d{1,2})?$/', $value)) {
      preg_replace("/,/", ".", $value);

      $val = (float) $value;
      return $val >= $min && $val <= $max;
    }
  }

  static function price ($value, $loopTime) {
    $single = $value; 

    for ($i=1; $i < $loopTime; $i++) { 
      $value += $single;
    }
    return $value;
  }

  static function total ($value) {
    function sum ($carry, $item) {
      return $carry += $item;
    }

    return array_reduce($value, "sum");
  }

}