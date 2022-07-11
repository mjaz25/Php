<?php

require_once "data/Namespace-AdminMember.php";
require_once "data/Namespace-Helper.php";

use Data\Admin\{Person, Location, Biography};

$admin_person = new Person("Cavin", "Bandung");
$admin_location = new Location();
$admin_biography = new Biography();
