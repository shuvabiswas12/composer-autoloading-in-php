<?php

namespace App\Utils;

class Email
{
    private $name;

    public function __construct()
    {
        $this->name = "models_2 namespace's Email class.";
        $this->show();
    }

    private function show()
    {
        echo "Classname = Email class, comes from {$this->name}" . "<br><br>";
    }
}
