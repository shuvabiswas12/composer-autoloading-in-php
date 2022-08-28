<?php

namespace App\Models;

class Email
{
    private $name;

    function __construct()
    {
        $this->name = "Email Class";        
        $this->show();
    }

    private function show()
    {
        echo "ClassName = {$this->name}." . "<br><br>";
    }
}
