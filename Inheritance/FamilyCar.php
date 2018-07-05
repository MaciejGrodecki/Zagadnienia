<?php

require_once 'AbstractCar.php';

class FamilyCar extends AbstractCar
{
    public function boost($boostSpeed) 
    {
        echo 'Boosting a Family car </br>';
        echo 'Running at: ' . ($this->speed + $boostSpeed) . ' km/h';
    }
}

