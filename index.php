<?php
require "functions.php";
require "Database.php";
require "router.php";

$config = require('config.php');
$db = new database($config['database']);

$query = "select * from names";

$post = $db->query($query)->fetchAll();
