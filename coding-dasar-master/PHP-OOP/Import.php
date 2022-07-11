<?php

require_once "data/Namespace-AdminMember.php";
require_once "data/Namespace-Helper.php";

use Data\Member\Person;
use function Data\Helper\sayHello;
use const Data\Helper\APPLICATION;

$member = new Person();
$admin = new \Data\Admin\Person("Cavin", "Bandung");

sayHello();

echo APPLICATION . PHP_EOL;
