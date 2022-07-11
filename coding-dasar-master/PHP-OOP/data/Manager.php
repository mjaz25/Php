<?php

class Manager
{
  var string $name;
  var string $title;

  public function __construct(string $name = " ", $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void
  {
    echo "Hi $name, my name is {$this->name}" . PHP_EOL;
  }
}

class VicePresdent extends Manager
{
  public function __construct(string $name)
  {
    parent::__construct($name, "VP");
  }

  function sayHello(string $name): void
  {
    echo "Hi $name, my name is {$this->name}" . PHP_EOL;
  }
}

$newManager = new Manager();
$newManager->name = "Cavin";
$newManager->sayHello("Asep");

$newVicePresdent = new VicePresdent("Abdul");
$newVicePresdent->name = "Asep";
$newVicePresdent->sayHello("Cavin");
