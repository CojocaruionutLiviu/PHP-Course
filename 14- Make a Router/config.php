<?php

return [
  'database'=> [
    'name'=>'mytodo',
    'username'=> 'root',
    'password'=> '',
    'connection' => 'mysql:host=localhost:3307',
    'option'=>[
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]
    ]
  ];