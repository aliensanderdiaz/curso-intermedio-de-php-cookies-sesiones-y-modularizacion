<?php

namespace App\Classes;

use App\Traits\Pet;

class Perritu {

    use Pet;

    public function bark()
    {
        return "Woog! 🐶";
    }

    public function drool() {
        return "🐕";
    }
}