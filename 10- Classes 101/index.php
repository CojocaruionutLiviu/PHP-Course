<?php
require 'functions.php';
class Task {
  public $description;
  public $completed=false;

  public function __construct($description)

  {
    //Automatically trigger on Instantiation
    $this-> description = $description;
  }
  public function complete()
  {
    $this-> completed = true;
  }
  public function isComplete()
  {
    return $this-> completed;
  }
}

$tasks= [
  new Task('Go to the Store'), //index 0
  new Task('Finish my screebcast'), // index 1
  new Task('Clean my room') //index 2
];

$tasks[0]->complete();

require 'index.view.php';