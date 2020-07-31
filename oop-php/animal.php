<?php

class Animal
{

    public $name = "";
    public $legs = 2;
    public $cold_blooded = false;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        echo $this->name;
    }

    function get_legs()
    {
        echo $this->legs;
    }

    function get_cold_blooded()
    {
        echo $this->cold_blooded;
    }
}
