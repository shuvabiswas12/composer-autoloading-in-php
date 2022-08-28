<?php

require_once("./vendor/autoload.php");

$email = new \App\Models\Email();
$order = new \App\Models\Order();
$second_email = new \App\Utils\Email();


echo "Autoloading works.";
