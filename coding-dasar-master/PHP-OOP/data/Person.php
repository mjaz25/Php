<?php

class Person
{
  // Constant
  const AUTHOR = "Cavin";

  // Variable
  var string $nama;
  var ?string $alamat = null; // Nullable, WAJIB: tanda ?
  var string $negara = "Indonesia"; // Default Value

  // Function
  function sayHello($nama)
  {
    if (is_null($nama)) {
      echo "Hi, my name is $this->nama" . PHP_EOL;
    } else {
      echo "Hello $nama, my name is $this->nama" . PHP_EOL;
    }
  }

  function info()
  {
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL; // Self Keyword
  }

  // Construtor, yaitu function yang akan dipanggil saat pertama kali Object dibuat
  public function __construct(string $namaBaru, ?string $alamatBaru)
  {
    $this->nama = $namaBaru;
    $this->alamat = $alamatBaru;
  }

  // Destructor, yaitu function yang akan dipanggil saat Object dihapus dari memory
  function __destruct()
  {
    echo "Objek Person {$this->nama} telah dihapus" . PHP_EOL;
  }
}
