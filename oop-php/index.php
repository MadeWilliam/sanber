<?php
require "animal.php";
require "frog.php";
require "ape.php";

$sheep = new Animal("shaun");

echo $sheep->get_name(); //"shaun"
echo "<br>";
echo $sheep->get_legs(); //2
echo "<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->get_name();
echo "<br>";
echo $kodok->get_legs();
echo "<br>";
echo $kodok->get_jump();
echo "<br>";
echo "<br>";
$sungokong = new Ape("kera sakti");
echo $sungokong->get_name();
echo "<br>";
echo $sungokong->get_yell();
echo "<br>";
