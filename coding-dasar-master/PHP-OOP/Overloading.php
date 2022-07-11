<?php

class Overloading
{
  private array $properties = [];

  // Dieksekusi ketika mengubah properties yang tidak tersedia
  public function __get($name)
  {
    return $this->properties[$name];
  }

  // Dieksekusi ketika mengakses properties yang tidak tersedia
  public function __set($name, $value)
  {
    $this->properties[$name] = $value;
  }

  // Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
  public function __isset($name)
  {
    return isset($this->properties[$name]);
  }

  // Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
  public function __unset($name)
  {
    unset($this->properties[$name]);
  }
}
