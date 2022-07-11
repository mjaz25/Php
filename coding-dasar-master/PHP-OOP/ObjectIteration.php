<?php

// Saat kita membuat object dari sebuah class,
// kita bisa melakukan iterasi ke semua properties yang terdapat
// di object tersebut menggunakan foreach

class Data
{
  var string $first = "Var";
  public string $second = "Public";
  private string $third = "Private";
  protected string $fourth = "Protected";
}

$data = new Data();

foreach ($data as $key => $value) {
  echo "Key : $key || Value : $value" . PHP_EOL;
}
