<?php
require_once "animal.php";

class Ape extends Animal
{

    public $yell = "Auooo";

    function get_yell()
    {
        echo $this->yell;
    }
}
