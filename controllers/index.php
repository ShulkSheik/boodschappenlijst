<?php

  require 'validator.php';
  $config = require('config.php');
  $db = new database($config['database']);

  $groceries = $db->query('select * from names')->fetchAll();
  $prices = [];

  foreach ($groceries as &$grocery) { 
    $grocery['total item'] = validator::price($grocery["price"], $grocery["amount"]); 
    array_push($prices, $grocery['total item']);
  }

require "views/index.view.php";
