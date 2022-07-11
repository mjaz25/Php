<?php

// Magic function adalah function-function 
// yang sudah ditentukan kegunaannya di PHP
// Kita tidak bisa membuat function tersebut,
// kecuali memang sudah ditentukan kegunaannya

class MagicFunction
{
  public string $id;
  public string $nama;
  public int $value;

  public function __construct(string $id, string $nama, int $value)
  {
    $this->id = $id;
    $this->nama = $nama;
    $this->value = $value;
  }

  /* __toString() function merupakan magic function yang 
    digunakan sebagai representasi string sebuah object. */
  public function __toString(): string
  {
    return "Student id: $this->id, name: $this->nama, value: $this->value" . PHP_EOL;
  }

  /* __invoke() merupakan function yang dieksekusi ketika
    object yang kita buat dianggap sebagai function */
  public function __invoke(...$argument)
  {
    $join = join(",", $argument);
    echo "Invoke dengan $join" . PHP_EOL;
  }

  /* Function var_dump() sebenarnya memanggil function __debugInfo() */
  public function __debugInfo(): array
  {
    return [
      'id' => $this->id,
      'nama' => $this->nama,
      'value' => $this->value
    ];
  }
}

$magicFunction = new MagicFunction('1', 'Cavin', 66);

$magicFunction->__invoke();
$magicFunction->__toString();
$magicFunction->__debugInfo();
