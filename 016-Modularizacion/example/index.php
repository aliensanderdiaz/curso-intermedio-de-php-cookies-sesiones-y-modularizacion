<?php

// include("constantes.php");

// echo PROFESION;
// echo "<br>";

// Si nos equivocamos en el nombre... nos aparece un warning
// include("constantess.php");

// // echo PROFESION;

// echo "<br>";
// echo "Sigo funcionando";
// echo "<br>";


// Con require... FATAL ERROR
// require("constantess.php");

// echo "NO Sigo funcionando";
// echo "<br>";

// Si incluimos dos veces el mismo archivo... se vuelve a escribir
// Va mal si tenemos constantes, porque se van a redeclarar
// include("constantes.php");
// include("constantes.php");


// include_once nos soluciona esto
include_once("constantes.php");
include_once("constantes.php");