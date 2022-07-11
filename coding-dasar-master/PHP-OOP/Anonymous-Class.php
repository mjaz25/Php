<?php

interface HelloWorld
{
  function sayHello(): void;
}

$anonymousClass = new class implements HelloWorld
{
  function sayHello(): void
  {
    echo "Hello, Anonymous." . PHP_EOL;
  }
};

$anonymousClass->sayHello();

// Dengan Constructor

$anonymousClass_Constructor = new class("Value Constructor") implements HelloWorld
{
  private string $name;

  public function __construct(string $nameBaru)
  {
    $this->name = $nameBaru;
  }

  public function sayHello(): void
  {
    echo "Hello, $this->name." . PHP_EOL;
  }
};

$anonymousClass_Constructor->sayHello();
