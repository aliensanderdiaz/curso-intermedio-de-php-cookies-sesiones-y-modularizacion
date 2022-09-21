<?php

require("date.php");

echo get_date_from_timestamp("2022-04-25");
echo "<br>";

echo get_short_date_from_timestamp("2022-04-25");
echo "<br>";

echo get_time_from_timestamp("18:32:45");
echo "<br>";

echo get_day_of_the_week(4);
echo "<br>";

echo translate_time("1 día", false);
echo "<br>";

echo add_time("2022-04-23 12:45:34", "1 día + 2 horas + 2 semanas");
echo "<br>";

echo get_full_date("2022-04-23 12:45:34");
echo "<br>";