<?php

abstract class AbstractCar
{
    public $speed = 90;
    
    public function start()
    {
        echo 'Starting the car... </br>';
        echo 'Running speed is ' . $this->speed;
    }
    
    public function stop()
    {
        echo 'Stopping the car...';
    }
    
    protected abstract function boost($boostSpeed);
    
}

