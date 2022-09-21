<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis() {
    $mr_michi = new Michi("Mr. Michi", "Blanquito", 14);
    $mr_michi_adopted = new MichisAdoptados("Mr. Michi", new DateTime(), "Juanito");

    echo $mr_michi->sayMeow() . " Me adoptó {$mr_michi_adopted->getadopted_by()}";
}