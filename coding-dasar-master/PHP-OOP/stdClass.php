<?php

// stdClass adalah class kosong bawaan dari PHP.

$stdClass = [
  'nama_depan' => 'Cavin',
  'nama_tengah' => 'Hartono',
  'nama_belakang' => 'Putra'
];

// Biasanya digunakan ketika kita melakukan konversi dari tipe lain 
// menjadi tipe object.

$obj = (object)$stdClass;

var_dump($obj);

echo $obj->nama_depan . PHP_EOL;
echo $obj->nama_tengah . PHP_EOL;
echo $obj->nama_belakang . PHP_EOL;

// stdClass sangat berguna ketika misal kita ingin melakukan konversi
// dari tipe data array ke object secara otomatis
