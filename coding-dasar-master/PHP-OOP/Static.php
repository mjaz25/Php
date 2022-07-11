<?php

// Static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu

class MathHelper
{
  // Variable Static
  static public string $author = "Math Helper";

  // Function Static
  static public function sum(int ...$num)
  {
    $hasil = 0;
    foreach ($num as $angka) {
      $hasil += $angka;
    }
    echo "Hasilnya: $hasil" . PHP_EOL;
  }
}

echo MathHelper::$author . PHP_EOL; // Memanggil variable di dalam MathHelper
$perjumlahan = MathHelper::sum(10, 10); // Memanggil function di dalam MathHelper
