<?php

require_once "data/Namespace-AdminMember.php";
require_once "data/Namespace-Helper.php";

// Namespace, yaitu dimana kita bisa menyimpan class-class kita di dalam namespace

$admin = new Data\Admin\Person("Cavin", "Bandung");
$member = new Data\Member\Person("Asep", "Garut");

echo \Data\Helper\APPLICATION . PHP_EOL; // Memanggil const di Helper

Data\Helper\sayHello(); // Memanggil function di Helper
