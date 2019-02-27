<?php
/**
 * Created by PhpStorm.
 * User: smsaw
 * Date: 2/27/2019
 * Time: 1:02 PM
 */
require_once 'Vehicle.php';

class Car
{
    public $vehicle;
    public function __construct()
    {
        $this->vehicle = new Vehicle();
    }

}