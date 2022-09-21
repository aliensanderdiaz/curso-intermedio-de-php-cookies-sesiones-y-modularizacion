<?php

// Por procedimiento / estructurada / funciones

$interval = date_interval_create_from_date_string("5 days");
$date = date_create();
echo date_format(date_add($date, $interval), "Y-m-d");

echo "<br>";
echo "<br>";
echo "<br>";

// POO
$interval = DateInterval::createFromDateString("5 days");
$date = new DateTime();
$date->add($interval);
echo $date->format("Y-m-d");