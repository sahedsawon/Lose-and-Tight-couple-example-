<?php
/**
 * Created by PhpStorm.
 * User: smsaw
 * Date: 2/27/2019
 * Time: 1:10 PM
 */
require_once 'Vehicle.php';

class Car implements VehicleInterface
{

    public function run()
    {
        echo 'Car Run';
    }
}