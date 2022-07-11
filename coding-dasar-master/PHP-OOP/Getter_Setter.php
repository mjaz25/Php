<?php

class Category
{
  private string $name;
  private bool $expensive;

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  // Getter
  public function isExpensive(): bool
  {
    return $this->expensive;
  }

  // Setter
  public function setExpensive(bool $expensive): void
  {
    $this->expensive = $expensive;
  }
}

$food = new Category();
$food->setName("Fried Rice");
$food->setExpensive(TRUE);

echo $food->getName() . PHP_EOL;
echo $food->isExpensive() . PHP_EOL;
