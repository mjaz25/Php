<?php

class Product
{
  private string $name;
  private int $price;

  public function __construct($newName, $newPrice)
  {
    $this->name = $newName;
    $this->price = $newPrice;
  }

  function getName(): string
  {
    return $this->name;
  }

  function setName($newName): void
  {
    $this->name = $newName;
  }

  function getPrice(): int
  {
    return $this->price;
  }

  function setPrice($newPrice): void
  {
    $this->price = $newPrice;
  }

  function info(): void
  {
    echo "Nama Produk : {$this->name}" . PHP_EOL;
    echo "Harga       : RP.{$this->price}" . PHP_EOL;
  }
}

$newProduct = new Product("", 0);
$newProduct->setName("Apple");
$newProduct->setPrice(10000);

$newProduct->info();
