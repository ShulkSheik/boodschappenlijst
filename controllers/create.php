<?php

  require 'validator.php';
  $config = require('config.php');
  $db = new database($config['database']);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $errors;
    $errors = [];

    if (! validator::string($_POST['name'], 1, 20)) { $errors['name'] = 'a unique name of less than 20 char is required'; }
    if (! validator::integer($_POST['amount'])) { $errors['amount'] = 'select a amount above 0'; }
    if (! validator::decimal($_POST['price'], 1, 100)) { $errors['price'] = 'invalid price'; }
    //dd(validator::decimal($_POST['price']));

    if (empty($errors)) {
      $db->query("INSERT INTO groceries.names (name, amount, price) VALUES (:name, :amount, :price)", [
      'name' => $_POST['name'], 
      'amount' => $_POST['amount'],
      'price' => preg_replace("/,/", ".", $_POST['price'])
      ]);
      header("Location: /");
    }
  }  
require "views/create.view.php";
