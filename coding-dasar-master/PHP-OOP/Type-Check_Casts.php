<?php

require_once "data/Manager.php";

function sayHello(Manager $manager)
{
  if ($manager instanceof Manager) {
    echo "Hello Manager, {$manager->name}" . PHP_EOL;
  } elseif ($manager instanceof VicePresdent) {
    echo "Hello Vice Presdent, {$manager->name}" . PHP_EOL;
  }
}
