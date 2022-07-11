<?php

// Multiline String

echo <<<TEKS
Heredoc

Heredoc adalah fitur String yang panjang,
sehingga kita tidak perlu melakukan enter, tab atau dll.
TEKS;

echo "\n\n";

// Nowdoc
echo <<<'TEKS'
Nowdoc

Nowdoc mirip dengan Heredoc cuman yang bedanya,
tidak memiliki Parsing atau Double Quote.
TEKS;

echo "\n \n";

// Variable Variables
// yaitu variable dari suatu value

$contoh = "Marfelio";
$$contoh = "Hartono";

echo "Contoh : $contoh";
echo "\n";

echo "Marfelio : $Marfelio";
echo "\n";

// Menghapus Variable

$nama = "Marfelio";
unset($nama);

// Constant yaitu variable yang tidak dirubah

define('AUTHOR', 1.10);

echo 1.10;

echo "\n \n";

// Array

$nama = ['Marfelio', 'Asep', 'Abdul', 'Martin', 'Denny'];

count($nama); // Mengambil total data di Array
$nama[4] = 'Marsel'; // Mengubah value
unset($nama[4]); // Menghapus value total, otomatis hilang dari Array
$nama[] = 'Denny'; // Menambah value dari Array

// Array Function 

$data_arrayFun = ['Marfelio', 'Asep', 'Fajar'];
var_dump(sort($data_arrayFun)); // Berurut dengan boolean True
var_dump(rsort($data_arrayFun)); // Berurut berbalik dengan boolean True

$datamap_arrayFun = [
  "id" => 18,
  "nama" => "Marfelio
 Hartono Putra",
  "alamat" => "Bandung"
];

var_dump(array_keys($datamap_arrayFun));
var_dump(array_values($datamap_arrayFun));

// Array dalam Array

$biodata = array(
  'id' => 1,
  'nama' => 'Marfelio
 Hartono',
  'umur' => 18,
  'alamat' => [
    'kota' => 'Bandung',
    'rumah' => 152
  ]
);

// Map
$mahasiswa = array(
  'id' => 1,
  'nama' => 'Marfelio
 Hartono',
  'umur' => 18
);

$mahasiswa2 = [
  'id' => 2,
  'nama' => 'Asep Muliyana',
  'umur' => 25
];

// Operator Aritmatika

$a = 2;
$b = 8;

var_dump(-$a); // output: -2
var_dump(+$a); // output: 2

$pangkat = $a ** $b;
echo "Hasil Pangkat = $pangkat"; // 256
echo "\n \n";

// Operator Penugasan

$a += $b; // $a = $a + $b;
$a -= $b; // $a = $a - $b;
$a *= $b; // $a = $a * $b;
$a /= $b; // $a = $a / $b;
$a %= $b; // $a = $a % $b;

// contoh

$total = 0;
$nasi_goreng = 8000;
$tehmanis = 3000;

$total += $nasi_goreng;
$total += $tehmanis;

echo "total: $total \n\n";

// Mengkonversi Number ke String atau sebaliknya

$valueString = (string)100; // '100'
$valueNumber = (int)'50'; // 50

// Variable Parsing
$variableParsing = 'Marfelio';
echo "Hello, nama saya $variableParsing" . "\n\n";

// Curly Brace
$curlyBrace = 'Marfelio';
echo "Hello, nama saya {$curlyBrace}" . "\n\n";

// Null Coalescing Operator
// yaitu, mengecek apakah sebuah data ada atau tidak, dan 
// juga apakah data tersebut isinya null atau bukan

$nullCoalescing = [
  "ada" => "ini data"
];

// Tanpa menggunakan Null Coalescing
if (isset($nullCoalescing['ada'])) {
  $aksi = $nullCoalescing['ada'];
} else {
  $aksi = 'tidak ada data';
}

// Menggunakan Null Coalescing

$aksi = $nullCoalescing['ada'] ?? 'tidak ada data';

echo $aksi . "\n\n"; // 'ini data'

// For-Each

$foreach_array_nama = ['Marfelio', 'Hartono', 'Putra'];

foreach ($foreach_array_nama as $var) {
  echo "Hello, $var" . PHP_EOL;
}

echo  "\n\n";

// atau

$foreach_map_nama = [
  'nama_depan' => 'Marfelio
',
  'nama_tengah' => 'Hartono',
  'nama_belakang' => 'Putra'
];

foreach ($foreach_map_nama as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}

echo  "\n\n";

// Variable Function 
// Variable function adalah kemampuan memanggil
// sebuah function dari value yang terdapat di sebuah variable

function variableFunction(string $nama, $namaFunctionCabang)
{
  $hasilnamaFunctionCabang = $namaFunctionCabang($nama);
  echo "Hello, $hasilnamaFunctionCabang" . PHP_EOL;
}

function sampleFunction(string $nama): string
{
  return "sample $nama";
}

variableFunction('Marfelio', 'sampleFunction');

// Anonymous Function
// Anonymous function membuat kita bisa mengirim function
// sebagai argument di function lainnya

$anonymousFun = function ($nama) {
  echo "Hello, $nama" . PHP_EOL;
};

$anonymousFun('Marfelio');
$anonymousFun('Hartono');


function function_biasa(string $nama, $anonymousFunction_argument)
{
  $hasil = $anonymousFunction_argument($nama);
  echo "Goodbye, $hasil" . PHP_EOL;
}

// Anonymous Function sebagai Argument
function_biasa('Marfelio', function (string $nama) {
  return strtoupper($nama);
});

// Closure
// Anonymous function tidak bisa mengakses variabel yang terdapat diluar function.
// Jika kita ingin menggunakan variable yang terdapat diluar anonymous function,
// kita perlu secara explicit menyebutkannya menggunakan kata kunci 'use'
// lalu diikuti variable-variable yang ingin kita gunakan

$closure_namaDepan = "Marfelio";
$closure_namaBelakang = "Hartono";

$function_anonymous = function () use ($closure_namaDepan, $closure_namaBelakang) {
  echo "Hello, $closure_namaDepan $closure_namaBelakang" . PHP_EOL;
};

$function_anonymous();

// Recursive Function
// Recursive function adalah function yang memanggil function dirinya sendiri

function factorialLoop(int $bilangan)
{
  $total = 1;
  for ($i = 1; $i <= $bilangan; $i++) {
    $total *= $i;
  }

  return $total;
}

factorialLoop(6); // 720

// Jika menggunakan Recursive Function
function factorialRecursive(int $bilangan)
{
  if ($bilangan == 1) {
    return 1;
  } else {
    return $bilangan * factorialRecursive($bilangan - 1);
  }
}

factorialRecursive(6); // 720

echo "String Function" . PHP_EOL;
echo join(",", [1, 2, 3, 4, 5]) . PHP_EOL; // Menggabungkan Array jadi String
var_dump(explode(" ", "Marfelio Hartono Putra")); // Memecah string menjadi array
echo strtolower("Marfelio Hartono Putra") . PHP_EOL; // String menjadi huruf kecil
echo strtoupper("Marfelio Hartono Putra") . PHP_EOL; // String menjadi huruf besar
echo trim("   Marfelio Hartono Putra      ") . PHP_EOL; // Menghapus whitespace di depan dan belakang string
echo substr("Marfelio Hartono Putra", 0, 5) . PHP_EOL; // Mengambil sebagian string

echo "Variable Global Scope dan Local Scope" . PHP_EOL;

$global_scope = "Marfelio"; // Global variable

function createName()
{
  $local_scope = "Marfelio
"; // Local variable
}

echo "Reference" . PHP_EOL;

$var_referenceBaru = "Marfelio";
$var_referenceLain = &$var_referenceBaru; // maka valuenya jadi 'Marfelio'
$var_referenceLain = "Hartono"; // dari 'Marfelio' jadi 'Hartono'

echo "Pass by Reference" . PHP_EOL;

function increment_reference(int &$nilai)
{
  $nilai++;
}

$var_reference = 5;
increment_reference($var_reference);

echo $var_reference; // asalnya 5, maka sekarang jadi 6
