<?php

$person = [

  'age' => 27, 
  'hair'=> 'blonde',
  'career'=> 'web developer'

];

$person['name'] = 'Liviu';

// die(var_dump($person));

unset($person['age']);




require 'index.view.php';