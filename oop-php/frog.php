<?php
require_once "animal.php";

class Frog extends Animal
{

    public $jump = "hop hop";
    public $legs = 4;

    function get_jump()
    {
        echo $this->jump;
    }
    
    function get_legs()
    {
        echo $this->legs;
    }
}
