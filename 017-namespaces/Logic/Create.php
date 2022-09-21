<?php

require("Classes/MichisAdoptados/Michi.php");
require("Classes/MichisDisponibles/Michi.php");

// Primera forma... muy antiestetica
// $mrmichi = new MichisDisponibles\Michi("Mr.Michi", "Blanquito", 16);
// $michisancio = new MichisDisponibles\Michi("Michisancio", "Naranjita", 15);
// $michales = new MichisDisponibles\Michi("Micahles", "Negrito", 8);

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichiAdoptado;

$mrmichi = new Michi("Mr.Michi", "Blanquito", 16);
$michisancio = new Michi("Michisancio", "Naranjita", 15);
$michales = new Michi("Micahles", "Negrito", 8);

$mrmichi_adopted = new MichiAdoptado("Mr.Michi", new DateTime(), "Adopter 1");
$michisancio_adopted = new MichiAdoptado("Michisancio", new DateTime(), "Adopter 1");
$michales_adopted = new MichiAdoptado("Micahles", new DateTime(), "Adopter 1");