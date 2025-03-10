<?php

  function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
  }

  function dd($a){
    echo("<pre>");
    var_dump($a);
    echo("</pre>");

    die();
  }