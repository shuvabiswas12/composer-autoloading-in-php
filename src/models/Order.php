<?php

namespace App\Models;

class Order
{
    private $name;

    public function __construct()
    {
        $this->name = "Order class";
        $this->show();
    }

    private function show()
    {
        echo "Classname = {$this->name}." . "<br><br>";
    }
}
