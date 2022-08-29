<?php

require_once("./vendor/autoload.php");

$email = new \App\Models\Email();
$order = new \App\Models\Order();
$second_email = new \App\Utils\Email();

// We can use the 'use' keyword for importing the class
use App\Utils\Person;

$person = new Person();

// Or we can use alias as below
use App\Utils\Email as MyEmail;

$myEmail = new MyEmail();

echo "Autoloading works.";
