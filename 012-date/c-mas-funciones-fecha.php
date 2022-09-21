<?php

// Diferencia de Tiempo

$today = new DateTime();
$birth = new DateTime("1989-01-31");

$interval = $birth->diff($today);
echo $interval->format("Han pasado %y años, %m meses con %d dias");
echo "<br>";

// Creamos desde un formato cualquiera
$date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");

echo $date->format("Y-m-d H:i:s");
echo "<br>";
// Modificar una fecha
$date = new DateTime();
$date->modify("+1 day +2 months");

echo $date->format("Y-m-d H:i:s");