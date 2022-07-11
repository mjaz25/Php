<?php

trait sayGoodbye
{
  function goodbye(?string $name): void
  {
    if (is_null($name)) {
      echo "Goodbye" . PHP_EOL;
    } else {
      echo "Goodbye, $name." . PHP_EOL;
    }
  }
}

trait hasName
{
  public string $name;
}


class PersonTrait
{
  use sayGoodbye, hasName; // Menggunakan Trait
}

// Memanggil Trait Properties
$person = new PersonTrait();
$person->name = "Cavin";
echo $person->name . PHP_EOL;


// Trait Confict, digunakan lebih dari satu
trait A
{
  function doA()
  {
    echo "A" . PHP_EOL;
  }

  function doB()
  {
    echo "B" . PHP_EOL;
  }
}

trait B
{
  function doA()
  {
    echo "A" . PHP_EOL;
  }

  function doB()
  {
    echo "B" . PHP_EOL;
  }
}

class TraitConfict
{
  use A, B {
    A::doA insteadof B;
    B::doB insteadof A;
  }
}

$memanggil = new TraitConfict();
$memanggil->doA();
$memanggil->doB();
