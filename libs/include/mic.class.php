<?php

class Mic
{
    public $brand;
    public $color;
    public $battery;
    public $charger;

    public function ds($color){
        print($color);
        print($this->color);
    }
}