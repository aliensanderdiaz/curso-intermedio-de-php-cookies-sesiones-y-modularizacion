<?php

// Establecer la zona horaria
date_default_timezone_set("America/Mexico_City");

// Obtener la fecha actual
$now = date("Y-m-d H:i:s");
echo $now;
echo "<br>";

$now = date("Y/m/d H:i:s");
echo $now;
echo "<br>";

$now = date_create();
// echo $now;


// strtotime
$now = date("Y-m-d H:i:s");
echo strtotime($now);
echo "<br>";
echo strtotime("17 April 2020");
echo "<br>";
echo strtotime("+1 week");
echo "<br>";
echo strtotime("next Monday");
echo "<br>";
echo strtotime("last Wednesday");
echo "<br>";

$unix_time_last_wednesday = strtotime("last Wednesday");
echo date("Y-m-d H:i:s", $unix_time_last_wednesday);
echo "<br>";

$unix_time_next_monday = strtotime("last Monday");
echo date("Y-m-d H:i:s", $unix_time_next_monday);
echo "<br>";

$unix_time_plus_one_week = strtotime("+1 week");
echo date("Y-m-d H:i:s", $unix_time_plus_one_week);
echo "<br>";

$unix_time_17_april = strtotime("17 April 2020");
echo date("Y-m-d H:i:s", $unix_time_17_april);

// Fechas inmutables
$date_inmutable = new DateTimeImmutable();