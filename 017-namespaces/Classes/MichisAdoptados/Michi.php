<?php

namespace MichisAdoptados;

class Michi
{
    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct($name, $date_adopted, $adopted_by)
    {
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getdate_adopted()
    {
        return $this->date_adopted;
    }

    public function setdate_adopted($date_adopted)
    {
        $this->date_adopted = $date_adopted;
    }

    public function getadopted_by()
    {
        return $this->adopted_by;
    }

    public function setadopted_by($adopted_by)
    {
        $this->adopted_by = $adopted_by;
    }

    public function sayMeow()
    {
        return "Meow";
    }
}
