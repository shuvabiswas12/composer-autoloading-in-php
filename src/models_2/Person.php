<?php

namespace App\Utils;

class Person {
    private $name;

    public function __construct()
    {
        $this->name = "This is a person class from models_2 folder." . "<br><br>";
        echo $this->name;
    }
}