<?php

class Connection{

  public function make()

  {

    try {
      return new PDO('mysql:host=localhost:3307;dbname=mytodo', 'root', '');
    } catch (PDOException $e){
      die($e->getMessage());
    } 

  }

}

// $pdo = Connection::make();
