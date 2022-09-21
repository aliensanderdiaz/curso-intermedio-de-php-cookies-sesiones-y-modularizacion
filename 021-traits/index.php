<?php

require("vendor/autoload.php");

use App\Classes\Perritu;
use App\Classes\Michi;

$firulais = new Perritu();
$michi = new Michi();

echo $firulais->sleep();
echo $firulais->play();
echo $firulais->bark();
echo $firulais->drool();

echo $michi->sleep();
echo $michi->play();
echo $michi->sayMeow();
echo $michi->scratch();